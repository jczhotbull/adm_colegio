<?php

include("identificador.php");

$alerta_principal = "0";


$ttbla = $_GET['ttabla'];

$idtbla = $_GET['idtabla'];

$nombdato = $_GET['nombdato'];

$ttitulo = $_GET['ttitulo'];


include("../conectar.php");

$query_perv = "SELECT * FROM temporada_escolar
 WHERE  status = '1' and periodo_escolar != '.' LIMIT 1 ";
$datos_plantilla_perv = mysqli_query($enlace, $query_perv) or die(mysqli_error());

$row_datos_control_perv = mysqli_fetch_array($datos_plantilla_perv); 

$el_proxpio = $row_datos_control_perv['id_periodo_es'];

 mysqli_close($enlace);






// los siguientes permiten eliminar un dato

    if(isset($_POST['borrar_selecc']))
    {

            $borrar_id = $_POST['borrar_selecc'];
           // $errorZ = " <p> <b>" . $borrar_id . " </b> </p>"; // me ayudan a saber si se esta agarrando el id correcto...

      include("../conectar.php");  


$alerta_principal = "2";

                      $queryC = "SELECT * FROM ".$ttbla." WHERE ".$idtbla." = '$_POST[borrar_selecc]' LIMIT 1";

                      $resultC = mysqli_query($enlace,$queryC);
                      $fila=mysqli_fetch_array($resultC);         // lo anterior me permite tener el nombre del registro...



/*

$query_repite = "SELECT * FROM asignatura_ciclo_grado, asignaturas, temporada_escolar
         WHERE   temporada_escolar.id_periodo_es = asignaturas.id_asign           
         and  id_del_ciclo = '$borrar_id'
        
         GROUP BY asignatura_ciclo_grado.id_asign_ciclo_grado";


$datos_repite = mysqli_query($enlace, $query_repite) or die(mysqli_error());
$totalRows_repite = mysqli_num_rows($datos_repite);   */





                      $queryD = "DELETE FROM ".$ttbla."  WHERE ".$idtbla." = '$_POST[borrar_selecc]' LIMIT 1";

                      if (!mysqli_query($enlace,$queryD))      // si no ha logrado borrar el dato
                         {
                          $errorZ="- Error - Dato actualmente usado en un registro.  ";
                          }


                          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }



                      else {  

                         $exitoZ = "<b>--&nbsp; " . $fila["$nombdato"] . " &nbsp;--</b> &nbsp;&nbsp; ha sido eliminado.";

                      }
                      

                      if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. "  ";
                             mysqli_close($enlace);            
                          }


    }

 




   // lo siguiente permite modificar el nombre de un dato.



 if(isset($_POST['editar_selecc']))
        {

$alerta_principal = "2";
       //    $editar_id = $_POST['editar_selecc'];
       //    $errorZ = " <p> <b>" . $editar_id . "  </b> </p>"; // me ayudan a saber si se esta agarrando el id correcto...

       //   $ingreso = $_POST['dato_selecc'];
       //   $errorZ = " <p> <b>" . $ingreso . " </b> </p>"; // me ayudan a saber si se agarro el texto ingresado...

      if (strlen($_POST['dato_selecc']) >9 )  // no sea mayor a 40 caracteres
                  {   $errorZ .= "La cadena de caracteres ingresados no puede ser mayor a 9."; }

      if (strlen($_POST['dato_selecc']) <9 )  // no sea mayor a 40 caracteres
                  {   $errorZ .= "La cadena de caracteres ingresados no puede ser menor a 9."; }

      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";

              }


      else  // tras haber confirmado el correcto relleno del campo
        {
        
            include("../conectar.php");

           // $dato = $_POST["nombre_area"];


$dato_mod_mod_mod = $_POST['dato_selecc'];


// y que pasa si es el mismo dato al que le di guardar????



$querydatow = "SELECT ".$idtbla." FROM ".$ttbla." WHERE ".$nombdato." ='".mysqli_real_escape_string($enlace,$_POST['dato_selecc'])."' LIMIT 1";

                  $resultdatow = mysqli_query($enlace,$querydatow);

    if (mysqli_num_rows($resultdatow)>0)
      {
       $errorZ="Ya existe un dato con igual nombre.";
      }


          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                 mysqli_close($enlace);            
              }
     


          else {  






   $sql = "UPDATE ".$ttbla." SET ".$nombdato." = '".mysqli_real_escape_string($enlace,$_POST['dato_selecc'])."'
                                                            
                                WHERE ".$idtbla." = '$_POST[editar_selecc]' LIMIT 1 ";

                       
            if (!mysqli_query($enlace,$sql))      // actualiza y si no logra ingresar los datos...
               {
                $errorZ=" Error llamar al Ing. ";   // " . $ttbla. "  y  " . $nombdato. " más " . $dsel. " y " . $dedit. "

               }


               if ($errorZ!="")     //  si $errorZ es distinto de vacío,  es que ha habido algun error
                          {
                             $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";
                             mysqli_close($enlace); 
                          }

            else{


$nombre_dir_completo = 'aaa_nominas/'.$dato_mod_mod_mod.'';

$nombre_01a = 'aaa_nominas/'.$dato_mod_mod_mod.'/01/a';
$nombre_01b = 'aaa_nominas/'.$dato_mod_mod_mod.'/01/b';
$nombre_01c = 'aaa_nominas/'.$dato_mod_mod_mod.'/01/c';
$nombre_01d = 'aaa_nominas/'.$dato_mod_mod_mod.'/01/d';

$nombre_02a = 'aaa_nominas/'.$dato_mod_mod_mod.'/02/a';
$nombre_02b = 'aaa_nominas/'.$dato_mod_mod_mod.'/02/b';
$nombre_02c = 'aaa_nominas/'.$dato_mod_mod_mod.'/02/c';
$nombre_02d = 'aaa_nominas/'.$dato_mod_mod_mod.'/02/d';

$nombre_03a = 'aaa_nominas/'.$dato_mod_mod_mod.'/03/a';
$nombre_03b = 'aaa_nominas/'.$dato_mod_mod_mod.'/03/b';
$nombre_03c = 'aaa_nominas/'.$dato_mod_mod_mod.'/03/c';
$nombre_03d = 'aaa_nominas/'.$dato_mod_mod_mod.'/03/d';

$nombre_04a = 'aaa_nominas/'.$dato_mod_mod_mod.'/04/a';
$nombre_04b = 'aaa_nominas/'.$dato_mod_mod_mod.'/04/b';
$nombre_04c = 'aaa_nominas/'.$dato_mod_mod_mod.'/04/c';
$nombre_04d = 'aaa_nominas/'.$dato_mod_mod_mod.'/04/d';

$nombre_05a = 'aaa_nominas/'.$dato_mod_mod_mod.'/05/a';
$nombre_05b = 'aaa_nominas/'.$dato_mod_mod_mod.'/05/b';
$nombre_05c = 'aaa_nominas/'.$dato_mod_mod_mod.'/05/c';
$nombre_05d = 'aaa_nominas/'.$dato_mod_mod_mod.'/05/d';

$nombre_06a = 'aaa_nominas/'.$dato_mod_mod_mod.'/06/a';
$nombre_06b = 'aaa_nominas/'.$dato_mod_mod_mod.'/06/b';
$nombre_06c = 'aaa_nominas/'.$dato_mod_mod_mod.'/06/c';
$nombre_06d = 'aaa_nominas/'.$dato_mod_mod_mod.'/06/d';

$nombre_07a = 'aaa_nominas/'.$dato_mod_mod_mod.'/07/a';
$nombre_07b = 'aaa_nominas/'.$dato_mod_mod_mod.'/07/b';
$nombre_07c = 'aaa_nominas/'.$dato_mod_mod_mod.'/07/c';
$nombre_07d = 'aaa_nominas/'.$dato_mod_mod_mod.'/07/d';

$nombre_08a = 'aaa_nominas/'.$dato_mod_mod_mod.'/08/a';
$nombre_08b = 'aaa_nominas/'.$dato_mod_mod_mod.'/08/b';
$nombre_08c = 'aaa_nominas/'.$dato_mod_mod_mod.'/08/c';
$nombre_08d = 'aaa_nominas/'.$dato_mod_mod_mod.'/08/d';

$nombre_09a = 'aaa_nominas/'.$dato_mod_mod_mod.'/09/a';
$nombre_09b = 'aaa_nominas/'.$dato_mod_mod_mod.'/09/b';
$nombre_09c = 'aaa_nominas/'.$dato_mod_mod_mod.'/09/c';
$nombre_09d = 'aaa_nominas/'.$dato_mod_mod_mod.'/09/d';

$nombre_10a = 'aaa_nominas/'.$dato_mod_mod_mod.'/10/a';
$nombre_10b = 'aaa_nominas/'.$dato_mod_mod_mod.'/10/b';
$nombre_10c = 'aaa_nominas/'.$dato_mod_mod_mod.'/10/c';
$nombre_10d = 'aaa_nominas/'.$dato_mod_mod_mod.'/10/d';

$nombre_11a = 'aaa_nominas/'.$dato_mod_mod_mod.'/11/a';
$nombre_11b = 'aaa_nominas/'.$dato_mod_mod_mod.'/11/b';
$nombre_11c = 'aaa_nominas/'.$dato_mod_mod_mod.'/11/c';
$nombre_11d = 'aaa_nominas/'.$dato_mod_mod_mod.'/11/d';

$nombre_12a = 'aaa_nominas/'.$dato_mod_mod_mod.'/12/a';
$nombre_12b = 'aaa_nominas/'.$dato_mod_mod_mod.'/12/b';
$nombre_12c = 'aaa_nominas/'.$dato_mod_mod_mod.'/12/c';
$nombre_12d = 'aaa_nominas/'.$dato_mod_mod_mod.'/12/d';

  if (!file_exists($nombre_dir_completo)) {
    mkdir($nombre_dir_completo, 0777, true);

    mkdir($nombre_01a, 0777, true);
    mkdir($nombre_01b, 0777, true);
    mkdir($nombre_01c, 0777, true);
    mkdir($nombre_01d, 0777, true);

    mkdir($nombre_02a, 0777, true);
    mkdir($nombre_02b, 0777, true);
    mkdir($nombre_02c, 0777, true);
    mkdir($nombre_02d, 0777, true);

mkdir($nombre_03a, 0777, true);
mkdir($nombre_03b, 0777, true);
mkdir($nombre_03c, 0777, true);
mkdir($nombre_03d, 0777, true);


mkdir($nombre_04a, 0777, true);
mkdir($nombre_04b, 0777, true);
mkdir($nombre_04c, 0777, true);
mkdir($nombre_04d, 0777, true);


mkdir($nombre_05a, 0777, true);
mkdir($nombre_05b, 0777, true);
mkdir($nombre_05c, 0777, true);
mkdir($nombre_05d, 0777, true);

mkdir($nombre_06a, 0777, true);
mkdir($nombre_06b, 0777, true);
mkdir($nombre_06c, 0777, true);
mkdir($nombre_06d, 0777, true);

mkdir($nombre_07a, 0777, true);
mkdir($nombre_07b, 0777, true);
mkdir($nombre_07c, 0777, true);
mkdir($nombre_07d, 0777, true);

mkdir($nombre_08a, 0777, true);
mkdir($nombre_08b, 0777, true);
mkdir($nombre_08c, 0777, true);
mkdir($nombre_08d, 0777, true);

mkdir($nombre_09a, 0777, true);
mkdir($nombre_09b, 0777, true);
mkdir($nombre_09c, 0777, true);
mkdir($nombre_09d, 0777, true);


mkdir($nombre_10a, 0777, true);
mkdir($nombre_10b, 0777, true);
mkdir($nombre_10c, 0777, true);
mkdir($nombre_10d, 0777, true);

mkdir($nombre_11a, 0777, true);
mkdir($nombre_11b, 0777, true);
mkdir($nombre_11c, 0777, true);
mkdir($nombre_11d, 0777, true);

mkdir($nombre_12a, 0777, true);
mkdir($nombre_12b, 0777, true);
mkdir($nombre_12c, 0777, true);
mkdir($nombre_12d, 0777, true);

     $exitoZ .= "- Carpeta de nominas creada. &nbsp;&nbsp; ";   }




                     $exitoZ .= "Dato Modificado"; 
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " ";  
                              mysqli_close($enlace);          
                          }

                       
            }

        }   

    } // cierre if en caso de actualizar  

         



    // fase para agregar un nuevo dato a la base de datos referente a los seleccionables

if (array_key_exists("submit",$_POST))// chequea si se ha enviado algo, de ser si --> se conecta a la BD y comprueba

   {
$alerta_principal = "2";

      include("../conectar.php");


         if (strlen($_POST['dato_selecc']) >9 )  // no sea mayor a 40 caracteres
                  {   $errorZ .= "La cadena de caracteres ingresados no puede ser mayor a 9."; }

      if (strlen($_POST['dato_selecc']) <9 )  // no sea mayor a 40 caracteres
                  {   $errorZ .= "La cadena de caracteres ingresados no puede ser menor a 9."; }


              

      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";            
              }


      else      // Sequencia de chequeo, verifica si el dato ya está registrado en la BD...
    {
       $querydato = "SELECT ".$idtbla." FROM ".$ttbla." WHERE ".$nombdato." ='".mysqli_real_escape_string($enlace,$_POST['dato_selecc'])."' LIMIT 1";

                  $resultdato = mysqli_query($enlace,$querydato);

    if (mysqli_num_rows($resultdato)>0)
      {
       $errorZ="Dato anteriormente registrado.";
      }


          if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";            
              }




        else     
       {

        $dato = $_POST["dato_selecc"];


        $query = "INSERT INTO ".$ttbla."(".$nombdato.") VALUES ('".mysqli_real_escape_string($enlace,$_POST['dato_selecc'])."')";


        if (!mysqli_query($enlace,$query))      // si no ha logrado ingresar los datos
         {
          $errorZ="Error, contactar al Ing.";
          mysqli_close($enlace);

          }


        else
          {  








              $periodo_id = mysqli_insert_id($enlace); // almacena el id insertado en el query pasado periodo


             //  procede a crear los registros necesarios para armar una nueva tabla de materias o asignaturas para cada grado o nivel
    

// primero leo cual es el ultimo id de la tabla asignaturas, para poder crear 16 nuevos a partir de ese


 $comodin = 16;

$resultanteid = "SELECT id_asign, id_periodo_es FROM asignaturas where id_periodo_es = '$el_proxpio' ORDER BY id_asign DESC LIMIT 1";   
$resultid = mysqli_query($enlace,$resultanteid) or die(mysqli_error());
$rowid = mysqli_fetch_assoc($resultid);
$es = $rowid['id_asign'];

  $resultanteidgrado = "SELECT * FROM asignatura_ciclo_grado where id_del_ciclo = '$el_proxpio' ORDER BY id_asign_ciclo_grado DESC LIMIT 1";   // me dice cual es el ultimo id de esta tabla  
                    $resultidgrado = mysqli_query($enlace,$resultanteidgrado) or die(mysqli_error());
                    $rowidgrado = mysqli_fetch_assoc($resultidgrado);
                    $esgrado = $rowidgrado['id_asign_ciclo_grado'];

 
 $id_asign_inicio = $es - $comodin ;  // ojo para el correcto funcionamiento al dar el programa ya debe haber almenos 3 ciclos en el sistema

 $el_q_copia = $esgrado - $comodin;    // le resto 16 para que me de el comienzo en maternal del q quiero copiar  
               // $comodin = $comodin - 1;


                $i = 1;
                $times_to_run = 16;
                    
                

                while ($i <= $times_to_run)
                {

                 $id_iniciado = $id_asign_inicio + $i;

                  $el_q_copiara  = $el_q_copia  + $i;

                 $i++;

$hacer = "INSERT INTO asignaturas (id_periodo_es, a_aaa, a_abrev, b_bbb, b_abrev, c_ccc, c_abrev, d_ddd, d_abrev, e_eee, e_abrev, f_fff, f_abrev,
                                   g_ggg, g_abrev, h_hhh, h_abrev, i_iii, i_abrev, j_jjj, j_abrev, k_kkk, k_abrev, l_lll, l_abrev, m_mmm, m_abrev, n_nnn, n_abrev )

SELECT $periodo_id, a_aaa, a_abrev, b_bbb, b_abrev, c_ccc, c_abrev, d_ddd, d_abrev, e_eee, e_abrev, f_fff, f_abrev,
       g_ggg, g_abrev, h_hhh, h_abrev, i_iii, i_abrev, j_jjj, j_abrev, k_kkk, k_abrev, l_lll, l_abrev, m_mmm, m_abrev, n_nnn, n_abrev

FROM asignaturas
WHERE id_asign='$id_iniciado' ";

                  $hacerlo = mysqli_query($enlace,$hacer) or die(mysqli_error());

                   $asignaturaxxx_id = mysqli_insert_id($enlace); // almacena el id insertado en el query pasado asignatura


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


                  $crear_pass_all = "UPDATE asignaturas  SET a_pass='$pass1', b_pass='$pass2', c_pass='$pass3', d_pass='$pass4', e_pass='$pass5', f_pass='$pass6', g_pass='$pass7', h_pass='$pass8',
                                                             i_pass='$pass9', j_pass='$pass10', k_pass='$pass11', l_pass='$pass12', m_pass='$pass13', n_pass='$pass14'  
                                     WHERE id_asign='$asignaturaxxx_id' ";
                                     $crearlos = mysqli_query($enlace,$crear_pass_all) or die(mysqli_error());


                 

                    $dime_cual = "SELECT id_del_grado FROM asignatura_ciclo_grado where id_asign_ciclo_grado = $el_q_copiara limit 1";  // agarra el id del grado
                     $hacerloyut = mysqli_query($enlace,$dime_cual) or die(mysqli_error());
                     $rowidgradoty = mysqli_fetch_assoc($hacerloyut);
                    $valorgrado = $rowidgradoty['id_del_grado'];



                $sqlmmm = "INSERT INTO asignatura_ciclo_grado (id_del_ciclo, id_del_grado, id_asignatura)
                                
                                VALUES ('$periodo_id', '$valorgrado', '$asignaturaxxx_id')";


                $hacerlomm = mysqli_query($enlace,$sqlmmm) or die(mysqli_error());

                }     



$nombre_dir_completo = 'aaa_nominas/'.$dato.'';

$nombre_01a = 'aaa_nominas/'.$dato.'/01/a';
$nombre_01b = 'aaa_nominas/'.$dato.'/01/b';
$nombre_01c = 'aaa_nominas/'.$dato.'/01/c';
$nombre_01d = 'aaa_nominas/'.$dato.'/01/d';

$nombre_02a = 'aaa_nominas/'.$dato.'/02/a';
$nombre_02b = 'aaa_nominas/'.$dato.'/02/b';
$nombre_02c = 'aaa_nominas/'.$dato.'/02/c';
$nombre_02d = 'aaa_nominas/'.$dato.'/02/d';

$nombre_03a = 'aaa_nominas/'.$dato.'/03/a';
$nombre_03b = 'aaa_nominas/'.$dato.'/03/b';
$nombre_03c = 'aaa_nominas/'.$dato.'/03/c';
$nombre_03d = 'aaa_nominas/'.$dato.'/03/d';

$nombre_04a = 'aaa_nominas/'.$dato.'/04/a';
$nombre_04b = 'aaa_nominas/'.$dato.'/04/b';
$nombre_04c = 'aaa_nominas/'.$dato.'/04/c';
$nombre_04d = 'aaa_nominas/'.$dato.'/04/d';

$nombre_05a = 'aaa_nominas/'.$dato.'/05/a';
$nombre_05b = 'aaa_nominas/'.$dato.'/05/b';
$nombre_05c = 'aaa_nominas/'.$dato.'/05/c';
$nombre_05d = 'aaa_nominas/'.$dato.'/05/d';

$nombre_06a = 'aaa_nominas/'.$dato.'/06/a';
$nombre_06b = 'aaa_nominas/'.$dato.'/06/b';
$nombre_06c = 'aaa_nominas/'.$dato.'/06/c';
$nombre_06d = 'aaa_nominas/'.$dato.'/06/d';

$nombre_07a = 'aaa_nominas/'.$dato.'/07/a';
$nombre_07b = 'aaa_nominas/'.$dato.'/07/b';
$nombre_07c = 'aaa_nominas/'.$dato.'/07/c';
$nombre_07d = 'aaa_nominas/'.$dato.'/07/d';

$nombre_08a = 'aaa_nominas/'.$dato.'/08/a';
$nombre_08b = 'aaa_nominas/'.$dato.'/08/b';
$nombre_08c = 'aaa_nominas/'.$dato.'/08/c';
$nombre_08d = 'aaa_nominas/'.$dato.'/08/d';

$nombre_09a = 'aaa_nominas/'.$dato.'/09/a';
$nombre_09b = 'aaa_nominas/'.$dato.'/09/b';
$nombre_09c = 'aaa_nominas/'.$dato.'/09/c';
$nombre_09d = 'aaa_nominas/'.$dato.'/09/d';

$nombre_10a = 'aaa_nominas/'.$dato.'/10/a';
$nombre_10b = 'aaa_nominas/'.$dato.'/10/b';
$nombre_10c = 'aaa_nominas/'.$dato.'/10/c';
$nombre_10d = 'aaa_nominas/'.$dato.'/10/d';

$nombre_11a = 'aaa_nominas/'.$dato.'/11/a';
$nombre_11b = 'aaa_nominas/'.$dato.'/11/b';
$nombre_11c = 'aaa_nominas/'.$dato.'/11/c';
$nombre_11d = 'aaa_nominas/'.$dato.'/11/d';

$nombre_12a = 'aaa_nominas/'.$dato.'/12/a';
$nombre_12b = 'aaa_nominas/'.$dato.'/12/b';
$nombre_12c = 'aaa_nominas/'.$dato.'/12/c';
$nombre_12d = 'aaa_nominas/'.$dato.'/12/d';




  if (!file_exists($nombre_dir_completo)) {
    mkdir($nombre_dir_completo, 0777, true);


       mkdir($nombre_01a, 0777, true);
    mkdir($nombre_01b, 0777, true);
    mkdir($nombre_01c, 0777, true);
    mkdir($nombre_01d, 0777, true);

    mkdir($nombre_02a, 0777, true);
    mkdir($nombre_02b, 0777, true);
    mkdir($nombre_02c, 0777, true);
    mkdir($nombre_02d, 0777, true);

mkdir($nombre_03a, 0777, true);
mkdir($nombre_03b, 0777, true);
mkdir($nombre_03c, 0777, true);
mkdir($nombre_03d, 0777, true);


mkdir($nombre_04a, 0777, true);
mkdir($nombre_04b, 0777, true);
mkdir($nombre_04c, 0777, true);
mkdir($nombre_04d, 0777, true);


mkdir($nombre_05a, 0777, true);
mkdir($nombre_05b, 0777, true);
mkdir($nombre_05c, 0777, true);
mkdir($nombre_05d, 0777, true);

mkdir($nombre_06a, 0777, true);
mkdir($nombre_06b, 0777, true);
mkdir($nombre_06c, 0777, true);
mkdir($nombre_06d, 0777, true);

mkdir($nombre_07a, 0777, true);
mkdir($nombre_07b, 0777, true);
mkdir($nombre_07c, 0777, true);
mkdir($nombre_07d, 0777, true);

mkdir($nombre_08a, 0777, true);
mkdir($nombre_08b, 0777, true);
mkdir($nombre_08c, 0777, true);
mkdir($nombre_08d, 0777, true);

mkdir($nombre_09a, 0777, true);
mkdir($nombre_09b, 0777, true);
mkdir($nombre_09c, 0777, true);
mkdir($nombre_09d, 0777, true);


mkdir($nombre_10a, 0777, true);
mkdir($nombre_10b, 0777, true);
mkdir($nombre_10c, 0777, true);
mkdir($nombre_10d, 0777, true);

mkdir($nombre_11a, 0777, true);
mkdir($nombre_11b, 0777, true);
mkdir($nombre_11c, 0777, true);
mkdir($nombre_11d, 0777, true);

mkdir($nombre_12a, 0777, true);
mkdir($nombre_12b, 0777, true);
mkdir($nombre_12c, 0777, true);
mkdir($nombre_12d, 0777, true);

     $exitoZ .= "- Carpeta de nominas creada. &nbsp;&nbsp; ";   }



               // Etapa final del registro

          $exitoZ .= " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; <b> Registro realizado. </b>";
          mysqli_close($enlace);

        }

      } // cierre del envio...

    } // cierre que verifica si ya estaba en la base


    }  // cierre if relacionado si se envio algo...
    





?>



<?php include ("Header.php"); ?>

<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->


<?php

$query = "SELECT * FROM ".$ttbla." WHERE ".$nombdato." != '.' ORDER BY ".$nombdato." ASC";

$datos_selecc = mysqli_query($enlace, $query) or die(mysqli_error());

$row_datos_selecc = mysqli_fetch_assoc($datos_selecc);

$totalRows_datos_selecc = mysqli_num_rows($datos_selecc);

mysqli_close($enlace);   ?>




<?php


if ($alerta_principal  == "0") {



 echo '<script type="text/javascript">';
  echo 'setTimeout(function () {

   swal({
  title: "",
  type: "info",
  html: "Modificar erroneamente datos en uso, puede causar incongruencias en el sistema!"
   + "<br><br> Use el botón de modificar solo para corregir errores tipográficos.",
  icon: "",
});'

;
  echo '}, 1000);</script>';  


} 

?>










<div class="content-wrapper">
  <div class="container-fluid">

    <div class="alert alert-primary" role="alert">
      <i><b><?php echo $ttitulo ?>...</b></i> "Se debe conservar la estructura establecida; <b>XXXX-YYYY</b>".
    </div>

        <div class="alert alert-danger" role="alert">
      <b>Para el correcto funcionamiento del sistema, no colocar más de dos periodos adicionales por encima del actual en curso.</b>
    </div>
    
    <div class="card  mx-auto mt-3">

      <div class="card-body">

        <form method="POST">


<div class="form-row">
    
    <div class="input-group col-lg-6 mb-1">
    
        <div class="input-group-prepend">
            <span class="input-group-text alert-success" id="basic-addon1"><i class="fas fa-plus fa-lg"></i>&nbsp Agregar dato:</span>  
        </div> 
        

        <input type="text" class="form-control" id="dato_selecc" name="dato_selecc" placeholder="..." aria-label="dato_selecc" aria-describedby="basic-addon1" required>
    

         <div class="input-group-append">
            <button type="submit" name="submit" class="btn btn-success">Guardar</button>
        </div>


    </div> 


 
  

  <div class="col-lg-6">
  
    
        <?php 
          if ($errorZ!="")
          { echo "<div class=\"input-group-text alert-danger\" id=\"basic-addon1\" role=\"alert\" align=\"center\" >".$errorZ."</div>"; }
        ?>
                               <!-- SOLO ES VISIBLE SI LA VARIABLE DE ERROR TIENE ALGO-->


        <?php 
          if ($exitoZ!="")
          { echo "<div class=\"input-group-text alert-success\" role=\"basic-addon1\" role=\"alert\" align=\"center\">".$exitoZ."</div>"; }
        ?>
                               <!-- SOLO ES VISIBLE SI LA VARIABLE DE ÉXITO TIENE ALGO-->


  
  </div>


         

</div><!-- cierre form- row -->

        </form>



      </div> <!-- cierre card body -->

    </div>  <!-- cierre card -->
              

                    

    


  <div class="card mb-3 separacionpequena" >
       

        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
             
              <thead>
                <tr>
                  <th>Datos Seleccionables:</th>
                  <th>Acción 1</th>
                  <th>Acción 2</th>
                </tr>
              </thead>
                          
              
              <tbody>

                <?php do{?>    <!-- va generarme tantas filas como datos tenga esta BD -->

                <tr>
                  <td><?php echo $row_datos_selecc["$nombdato"]; ?> </td>


<td align="center">

  <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal"
          data-target="#modificar<?php echo $row_datos_selecc["$idtbla"]; ?>">
                                                                        <!-- este ultimo identifica cual modal abrir -->

                     <i class="fas fa-edit"></i> &nbsp; Modificar
  </button>    
                    
</td>


<!-- ini modal editar -->

<div class="modal fade" id="modificar<?php echo $row_datos_selecc["$idtbla"]; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
        <i class="fas fa-info fa-lg"></i> &nbsp;Editar o Modificar!!!</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">

      

        <div class="form-row">
        <div class="input-group col-lg-12">


<div class="input-group-prepend">
  <span class="input-group-text alert-info" id="basic-addon1"><i class="fas fa-edit fa-lg"></i></span> 
</div>
  <input type="text" class="form-control" id="dato_selecc" name="dato_selecc" value="<?php echo $row_datos_selecc["$nombdato"]; ?>">
 
       
        </div>
        </div>



      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="editar_selecc" class="btn btn-info" value="<?php echo $row_datos_selecc["$idtbla"]; ?>">
              Modificar</button>  

      </div>
      </form>
      


    </div>
  </div>
</div>


<!-- cierre modal de editar -->




<td align="center">

  <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal"
          data-target="#borrar<?php echo $row_datos_selecc["$idtbla"]; ?>">
                                                                        <!-- este ultimo identifica cual modal abrir -->

                     <i class="far fa-trash-alt"></i> &nbsp; Eliminar
  </button>                 

</td>

<!-- ini modal eliminar -->

<div class="modal fade" id="borrar<?php echo $row_datos_selecc["$idtbla"]; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
        El dato: <b>&nbsp;"&nbsp; <?php echo $row_datos_selecc["$nombdato"];?> &nbsp;"&nbsp;</b> sera removido de la base de datos. 
      </div>
      <div class="modal-footer">

  <form method="post">

    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="submit" name="borrar_selecc" class="btn btn-danger" value="<?php echo $row_datos_selecc["$idtbla"]; ?>" >
          Eliminar</button>

  </form>


      </div>
    </div>
  </div>
</div>

<!-- cierre modal de eliminar -->







                  
                </tr>
                


                 <?php } while ($row_datos_selecc = mysqli_fetch_assoc($datos_selecc)); ?>

                
              </tbody>

            </table>

          </div> <!-- cierre tabla responsiva -->

        </div>  <!-- cierre card body -->

        <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>  -->

  </div> <!-- cierre card -->
















                           

  </div>   <!-- cierre container fluid -->
</div>  <!-- cierre wrapper -->




<?php include ("Footer.php"); ?>
