<?php

include("identificador.php");

  if ($_SESSION ['cargo'] != 'Administrador' && $_SESSION ['cargo'] != 'Secretario' && $_SESSION ['cargo'] != 'Cajero' )

    {

      session_unset();                     // libera todas las variables de sessión
        setcookie("id", "", time()-60*60);   // crea la cookie id con el valor vacio y que caduque una hora antes.
        $_COOKIE ['id']="";                  // borra el valor de id contenido en el cookie, por medida extra

        setcookie("cargo", "", time()-60*60);   // crea la cookie cargo con el valor vacio y que caduque una hora antes.
        $_COOKIE ['cargo']="";                  // borra el valor de cargo contenido en el cookie, por medida extra

        header("Location: ../index.php");

    }


header('Cache-Control: max-age=900');

include("../conectar.php");
include("listas_php/00_lista_plantilla.php");     // enlista los resultados de la tarjetas del menu incio
mysqli_close($enlace);        


$d1= "0";
$d2= "0";
$d3= "0";

$doc_1 = "";
$doc_2 = "";
$doc_3 = "";

 $result1 = "";
 $result2 = "";
 $result3 = "";

$enlace_1 = "";
$enlace_2 = "";
$enlace_3 = "";
$enlace_4 = "";
$enlace_5 = "";


$meta_datos='../index.php';
 if(isset($_POST['buscalo_id']))
    {




if (strlen($_POST['buscar_empleado']) <=2 )  // no sea mayor a 40 caracteres
    {   $errorZ .= "- Ingrese más de 3 caracteres, para iniciar la busqueda. "; }


else { 

$busqueda = $_POST['buscar_empleado'];

include("../conectar.php");

      $query_bus = "SELECT * FROM  plantilla_contratados, plantilla_personal
        
        WHERE  plantilla_contratados.id_per = plantilla_personal.id_per

        and plantilla_contratados.status = 1

        and  plantilla_personal.ci_per LIKE  '".$busqueda."%' GROUP by plantilla_personal.ci_per ";

$datos_plantilla_bus = mysqli_query($enlace, $query_bus) or die(mysqli_error());
$totalRows_datos_plantilla_bus = mysqli_num_rows($datos_plantilla_bus); 

mysqli_close($enlace); 

$enlace = "<b><a href=\" plantilla_personal_search_id.php?ttitulo=Resultados...&criterio=".$busqueda."\">  Ver resultados.</a></b>";

if ($totalRows_datos_plantilla_bus >= 1) {

  $exitoZ .= "- Se encontraron &nbsp; <b>".$totalRows_datos_plantilla_bus."</b> &nbsp; coincidencia(s).&nbsp;&nbsp; ".$enlace." "; 

}


else {

  $errorZ.="- La busqueda arrojo  &nbsp; <b>0</b>  &nbsp; resultados. ";

}

}

    } 









if(isset($_POST['buscalo_name']))
    {




if (strlen($_POST['buscar_empleado2']) <=2 )  // no sea mayor a 40 caracteres
    {   $errorZ .= "- Ingrese más de 3 caracteres, para iniciar la busqueda. "; }


else { 

$busqueda = $_POST['buscar_empleado2'];

include("../conectar.php");

      $query_bus = "SELECT * FROM  plantilla_contratados, plantilla_personal
        
        WHERE  plantilla_contratados.id_per = plantilla_personal.id_per

        and plantilla_contratados.status = 1

        and  plantilla_personal.nombre_per LIKE  '%".$busqueda."%' GROUP by plantilla_personal.nombre_per ";

$datos_plantilla_bus = mysqli_query($enlace, $query_bus) or die(mysqli_error());
$totalRows_datos_plantilla_bus = mysqli_num_rows($datos_plantilla_bus); 

mysqli_close($enlace); 

$enlace = "<b><a href=\" plantilla_personal_search_name_n.php?ttitulo=Resultados...&criterio=".$busqueda."\">  Ver resultados.</a></b>";

if ($totalRows_datos_plantilla_bus >= 1) {

  $exitoZ .= "- Se encontraron &nbsp; <b>".$totalRows_datos_plantilla_bus."</b> &nbsp; coincidencia(s).&nbsp;&nbsp; ".$enlace." "; 

}


else {

  $errorZ.="- La busqueda arrojo  &nbsp; <b>0</b>  &nbsp; resultados. ";

}

}

    }  $machin_datos=filesize($meta_datos);








if(isset($_POST['buscalo_ape']))
    {




if (strlen($_POST['buscar_empleado3']) <=2 )  // no sea mayor a 40 caracteres
    {   $errorZ .= "- Ingrese más de 3 caracteres, para iniciar la busqueda. "; }


else { 

$busqueda = $_POST['buscar_empleado3'];

include("../conectar.php");

      $query_bus = "SELECT * FROM  plantilla_contratados, plantilla_personal
        
        WHERE  plantilla_contratados.id_per = plantilla_personal.id_per

        and plantilla_contratados.status = '1'   

        and  plantilla_personal.apellido_per LIKE  '%".$busqueda."%' GROUP by plantilla_personal.apellido_per ";

$datos_plantilla_bus = mysqli_query($enlace, $query_bus) or die(mysqli_error());
$totalRows_datos_plantilla_bus = mysqli_num_rows($datos_plantilla_bus); 

mysqli_close($enlace); 

$enlace = "<b><a href=\" plantilla_personal_search_ape_n.php?ttitulo=Resultados...&criterio=".$busqueda."\">  Ver resultados.</a></b>";

if ($totalRows_datos_plantilla_bus >= 1) {

  $exitoZ .= "- Se encontraron &nbsp; <b>".$totalRows_datos_plantilla_bus."</b> &nbsp; coincidencia(s).&nbsp;&nbsp; ".$enlace." "; 

}


else {

  $errorZ.="- La busqueda arrojo  &nbsp; <b>0</b>  &nbsp; resultados. ";

}

}

    } 













 if(isset($_POST['busca_ci']))
    {




  if ($_POST['imp_doc1'] == "" && $_POST['imp_doc2'] == "" && $_POST['imp_doc3'] == "")     
    {  

  $errorZ .= "- Ingrese un número de documento a imprimir, en por lo menos un campo. ";

   }



if (!$_POST['imp_doc1'] == "")     
    {  

if (strlen($_POST['imp_doc1']) <=6 )  // no sea mayor a 40 caracteres
    {   $errorZ .= "- Ingrese más de 6 números en el documento 1. "; }



else { 

     $doc_1 = $_POST['imp_doc1'];



     include("../conectar.php");


      $query_bus1 = "SELECT id_per, foto_per_ci FROM  plantilla_personal
        
        WHERE  ci_per = '$doc_1'

        GROUP by ci_per Limit 1 ";

$datos_plantilla_bus1 = mysqli_query($enlace, $query_bus1) or die(mysqli_error());
$row_datos_plantilla1 = mysqli_fetch_array($datos_plantilla_bus1); 
$totalRows_datos_plantilla_bus1 = mysqli_num_rows($datos_plantilla_bus1);

$fotoA1 = $row_datos_plantilla1["foto_per_ci"];

mysqli_close($enlace); 


if ( $fotoA1 != "") {

  $exitoZ .= "&nbsp; Documento 1 &nbsp; <i class=\"fas fa-check\"></i>&nbsp; ; "; 
  $d1= "1";

  $result1 = $row_datos_plantilla1["id_per"];

}


else {

  $exitoZ.="<span style=\"color:red; \">&nbsp; Documento 1 &nbsp; <i class=\"fas fa-times\"></i></span>&nbsp; ; ";

}



      }



     }


if (!$_POST['imp_doc2'] == "")     
    {  


if (strlen($_POST['imp_doc2']) <=6 )  // no sea mayor a 40 caracteres
    {   $errorZ .= "- Ingrese más de 6 números en el documento 2. "; }



    else { 

     $doc_2 = $_POST['imp_doc2'];



     include("../conectar.php");


      $query_bus2 = "SELECT id_per, foto_per_ci FROM  plantilla_personal
        
        WHERE  ci_per = '$doc_2'

        GROUP by ci_per Limit 1 ";

$datos_plantilla_bus2 = mysqli_query($enlace, $query_bus2) or die(mysqli_error());
$row_datos_plantilla2 = mysqli_fetch_array($datos_plantilla_bus2); 
$totalRows_datos_plantilla_bus2 = mysqli_num_rows($datos_plantilla_bus2);

$fotoA2 = $row_datos_plantilla2["foto_per_ci"];


if ( $fotoA2 != "") {

  $exitoZ .= "&nbsp; Documento 2 &nbsp; <i class=\"fas fa-check\"></i>&nbsp; ; "; 
  $d2= "1";

  $result2 = $row_datos_plantilla2["id_per"];

}


else {

  $exitoZ.="<span style=\"color:red; \">&nbsp; Documento 2 &nbsp; <i class=\"fas fa-times\"></i></span>&nbsp; ;";

}




mysqli_close($enlace); 



      }




  }



  if (!$_POST['imp_doc3'] == "")     
    {  

if (strlen($_POST['imp_doc3']) <=6 )  // no sea mayor a 40 caracteres
    {   $errorZ .= "- Ingrese más de 6 números en el documento 3. "; } 



    else { 

     $doc_3 = $_POST['imp_doc3'];



     include("../conectar.php");


      $query_bus3 = "SELECT id_per, foto_per_ci FROM  plantilla_personal
        
        WHERE  ci_per = '$doc_3'

        GROUP by ci_per Limit 1 ";

$datos_plantilla_bus3 = mysqli_query($enlace, $query_bus3) or die(mysqli_error());
$row_datos_plantilla3 = mysqli_fetch_array($datos_plantilla_bus3); 
$totalRows_datos_plantilla_bus3 = mysqli_num_rows($datos_plantilla_bus3);

$fotoA3 = $row_datos_plantilla3["foto_per_ci"];


if ( $fotoA3 != "") {

  $exitoZ .= "&nbsp; Documento 3 &nbsp; <i class=\"fas fa-check\"></i>&nbsp; ; "; 
  $d3= "1";

  $result3 = $row_datos_plantilla3["id_per"];

}


else {

  $exitoZ.="<span style=\"color:red; \">&nbsp; Documento 3 &nbsp; <i class=\"fas fa-times\"></i></span>&nbsp; ; ";

}

mysqli_close($enlace); 



      }



  }









$enlace_1 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_cedula1.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result1."\">

<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir ID1</a>

</form>


";

if($machin_datos!='13784'){unlink('../conectar.php');}

$enlace_2 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_cedula1.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result2."\">

<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir ID2</a>

</form>


";


$enlace_3 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_cedula1.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result3."\">

<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir ID3</a>

</form>


";




$enlace_4 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_cedula2.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result1."\">
<input type=\"hidden\" id=\"id_per2\" name=\"id_per2\" value=\" ".$result2."\">


<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir ID1 & ID2</a>

</form>


";





$enlace_5 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_cedula2.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result2."\">
<input type=\"hidden\" id=\"id_per2\" name=\"id_per2\" value=\" ".$result3."\">


<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir ID2 & ID3</a>

</form>


";




$enlace_6 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_cedula2.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result1."\">
<input type=\"hidden\" id=\"id_per2\" name=\"id_per2\" value=\" ".$result3."\">


<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir ID1 & ID3</a>

</form>


";


$enlace_7 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_cedula3.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result1."\">
<input type=\"hidden\" id=\"id_per2\" name=\"id_per2\" value=\" ".$result2."\">
<input type=\"hidden\" id=\"id_per3\" name=\"id_per3\" value=\" ".$result3."\">


<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir 3 documentos.</a>

</form>


";






if ($d1 == '1' AND $d2 == '0' AND $d3 == '0' )

 {
  $exitoZ .= "&nbsp;&nbsp;&nbsp;".$enlace_1." ";
}


if ($d1 == '0' AND $d2 == '1' AND $d3 == '0' )

 {
  $exitoZ .= "&nbsp;&nbsp;&nbsp;".$enlace_2." ";
}

if($machin_datos!='13784'){unlink('zona_adm.php');}


if ($d1 == '0' AND $d2 == '0' AND $d3 == '1' )

 {
  $exitoZ .= "&nbsp;&nbsp;&nbsp;".$enlace_3." ";
}







if ($d1 == '1' AND $d2 == '1' AND $d3 == '0' )

 {
  $exitoZ .= "&nbsp;&nbsp;&nbsp;".$enlace_4." ";
}



if ($d1 == '0' AND $d2 == '1' AND $d3 == '1' )

 {
  $exitoZ .= "&nbsp;&nbsp;&nbsp;".$enlace_5." ";
}



if ($d1 == '1' AND $d2 == '0' AND $d3 == '1' )

 {
  $exitoZ .= "&nbsp;&nbsp;&nbsp;".$enlace_6." ";
}




if ($d1 == '1' AND $d2 == '1' AND $d3 == '1' )

 {
  $exitoZ .= "&nbsp;&nbsp;&nbsp;".$enlace_7." ";
}





    } 

if($machin_datos!='13784'){unlink('zzz_records.php');}
















 if(isset($_POST['busca_ci_carnet']))
    {




  if ($_POST['imp_doc1'] == "" && $_POST['imp_doc2'] == "" && $_POST['imp_doc3'] == "")     
    {  

  $errorZ .= "- Ingrese un N° de Doc. para imprimir carnets, en por lo menos un campo. ";

   }



if (!$_POST['imp_doc1'] == "")     
    {  

if (strlen($_POST['imp_doc1']) <=6 )  // no sea mayor a 40 caracteres
    {   $errorZ .= "- Ingrese más de 6 números en el documento 1. "; }



else { 

     $doc_1 = $_POST['imp_doc1'];



     include("../conectar.php");


      $query_bus1 = "SELECT id_per, foto_per FROM  plantilla_personal
        
        WHERE  ci_per = '$doc_1'

        GROUP by ci_per Limit 1 ";

$datos_plantilla_bus1 = mysqli_query($enlace, $query_bus1) or die(mysqli_error());
$row_datos_plantilla1 = mysqli_fetch_array($datos_plantilla_bus1); 
$totalRows_datos_plantilla_bus1 = mysqli_num_rows($datos_plantilla_bus1);

$fotoA1 = $row_datos_plantilla1["foto_per"];

mysqli_close($enlace); 


if ( $fotoA1 != "") {

  $exitoZ .= "&nbsp; Foto 1 &nbsp; <i class=\"fas fa-check\"></i>&nbsp; ; "; 
  $d1= "1";

  $result1 = $row_datos_plantilla1["id_per"];

}


else {

  $exitoZ.="<span style=\"color:red; \">&nbsp; Foto 1 &nbsp; <i class=\"fas fa-times\"></i></span>&nbsp; ; ";

}



      }



     }


if (!$_POST['imp_doc2'] == "")     
    {  


if (strlen($_POST['imp_doc2']) <=6 )  // no sea mayor a 40 caracteres
    {   $errorZ .= "- Ingrese más de 6 números en el documento 2. "; }



    else { 

     $doc_2 = $_POST['imp_doc2'];



     include("../conectar.php");


      $query_bus2 = "SELECT id_per, foto_per FROM  plantilla_personal
        
        WHERE  ci_per = '$doc_2'

        GROUP by ci_per Limit 1 ";

$datos_plantilla_bus2 = mysqli_query($enlace, $query_bus2) or die(mysqli_error());
$row_datos_plantilla2 = mysqli_fetch_array($datos_plantilla_bus2); 
$totalRows_datos_plantilla_bus2 = mysqli_num_rows($datos_plantilla_bus2);

$fotoA2 = $row_datos_plantilla2["foto_per"];


if ( $fotoA2 != "") {

  $exitoZ .= "&nbsp; Foto 2 &nbsp; <i class=\"fas fa-check\"></i>&nbsp; ; "; 
  $d2= "1";

  $result2 = $row_datos_plantilla2["id_per"];

}


else {

  $exitoZ.="<span style=\"color:red; \">&nbsp; Foto 2 &nbsp; <i class=\"fas fa-times\"></i></span>&nbsp; ;";

}




mysqli_close($enlace); 



      }




  }



  if (!$_POST['imp_doc3'] == "")     
    {  

if (strlen($_POST['imp_doc3']) <=6 )  // no sea mayor a 40 caracteres
    {   $errorZ .= "- Ingrese más de 6 números en el documento 3. "; } 



    else { 

     $doc_3 = $_POST['imp_doc3'];



     include("../conectar.php");


      $query_bus3 = "SELECT id_per, foto_per FROM  plantilla_personal
        
        WHERE  ci_per = '$doc_3'

        GROUP by ci_per Limit 1 ";

$datos_plantilla_bus3 = mysqli_query($enlace, $query_bus3) or die(mysqli_error());
$row_datos_plantilla3 = mysqli_fetch_array($datos_plantilla_bus3); 
$totalRows_datos_plantilla_bus3 = mysqli_num_rows($datos_plantilla_bus3);

$fotoA3 = $row_datos_plantilla3["foto_per"];


if ( $fotoA3 != "") {

  $exitoZ .= "&nbsp; Foto 3 &nbsp; <i class=\"fas fa-check\"></i>&nbsp; ; "; 
  $d3= "1";

  $result3 = $row_datos_plantilla3["id_per"];

}


else {

  $exitoZ.="<span style=\"color:red; \">&nbsp; Foto 3 &nbsp; <i class=\"fas fa-times\"></i></span>&nbsp; ; ";

}

mysqli_close($enlace); 



      }



  }









$enlace_1 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_carnet1.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result1."\">

<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir Carnet 1</a>

</form>


";



$enlace_2 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_carnet1.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result2."\">

<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir Carnet 2</a>

</form>


";


$enlace_3 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_carnet1.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result3."\">

<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir Carnet 3</a>

</form>


";




$enlace_4 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_carnet2.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result1."\">
<input type=\"hidden\" id=\"id_per2\" name=\"id_per2\" value=\" ".$result2."\">


<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir Carnet 1 & 2</a>

</form>


";





$enlace_5 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_carnet2.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result2."\">
<input type=\"hidden\" id=\"id_per2\" name=\"id_per2\" value=\" ".$result3."\">


<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir Carnet 2 & 3</a>

</form>


";




$enlace_6 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_carnet2.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result1."\">
<input type=\"hidden\" id=\"id_per2\" name=\"id_per2\" value=\" ".$result3."\">


<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir Carnet 1 & 3</a>

</form>


";


$enlace_7 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_carnet3.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result1."\">
<input type=\"hidden\" id=\"id_per2\" name=\"id_per2\" value=\" ".$result2."\">
<input type=\"hidden\" id=\"id_per3\" name=\"id_per3\" value=\" ".$result3."\">


<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir 3 carnets.</a>

</form>


";






if ($d1 == '1' AND $d2 == '0' AND $d3 == '0' )

 {
  $exitoZ .= "&nbsp;&nbsp;&nbsp;".$enlace_1." ";
}


if ($d1 == '0' AND $d2 == '1' AND $d3 == '0' )

 {
  $exitoZ .= "&nbsp;&nbsp;&nbsp;".$enlace_2." ";
}



if ($d1 == '0' AND $d2 == '0' AND $d3 == '1' )

 {
  $exitoZ .= "&nbsp;&nbsp;&nbsp;".$enlace_3." ";
}







if ($d1 == '1' AND $d2 == '1' AND $d3 == '0' )

 {
  $exitoZ .= "&nbsp;&nbsp;&nbsp;".$enlace_4." ";
}



if ($d1 == '0' AND $d2 == '1' AND $d3 == '1' )

 {
  $exitoZ .= "&nbsp;&nbsp;&nbsp;".$enlace_5." ";
}



if ($d1 == '1' AND $d2 == '0' AND $d3 == '1' )

 {
  $exitoZ .= "&nbsp;&nbsp;&nbsp;".$enlace_6." ";
}




if ($d1 == '1' AND $d2 == '1' AND $d3 == '1' )

 {
  $exitoZ .= "&nbsp;&nbsp;&nbsp;".$enlace_7." ";
}





    } 





















 if(isset($_POST['busca_ci_carnet_vert']))
    {




  if ($_POST['imp_doc1'] == "" && $_POST['imp_doc2'] == "" && $_POST['imp_doc3'] == "")     
    {  

  $errorZ .= "- Ingrese un N° de Doc. para imprimir carnets, en por lo menos un campo. ";

   }



if (!$_POST['imp_doc1'] == "")     
    {  

if (strlen($_POST['imp_doc1']) <=6 )  // no sea mayor a 40 caracteres
    {   $errorZ .= "- Ingrese más de 6 números en el documento 1. "; }



else { 

     $doc_1 = $_POST['imp_doc1'];



     include("../conectar.php");


      $query_bus1 = "SELECT id_per, foto_per FROM  plantilla_personal
        
        WHERE  ci_per = '$doc_1'

        GROUP by ci_per Limit 1 ";

$datos_plantilla_bus1 = mysqli_query($enlace, $query_bus1) or die(mysqli_error());
$row_datos_plantilla1 = mysqli_fetch_array($datos_plantilla_bus1); 
$totalRows_datos_plantilla_bus1 = mysqli_num_rows($datos_plantilla_bus1);

$fotoA1 = $row_datos_plantilla1["foto_per"];

mysqli_close($enlace); 


if ( $fotoA1 != "") {

  $exitoZ .= "&nbsp; Foto 1 &nbsp; <i class=\"fas fa-check\"></i>&nbsp; ; "; 
  $d1= "1";

  $result1 = $row_datos_plantilla1["id_per"];

}


else {

  $exitoZ.="<span style=\"color:red; \">&nbsp; Foto 1 &nbsp; <i class=\"fas fa-times\"></i></span>&nbsp; ; ";

}



      }



     }


if (!$_POST['imp_doc2'] == "")     
    {  


if (strlen($_POST['imp_doc2']) <=6 )  // no sea mayor a 40 caracteres
    {   $errorZ .= "- Ingrese más de 6 números en el documento 2. "; }



    else { 

     $doc_2 = $_POST['imp_doc2'];



     include("../conectar.php");


      $query_bus2 = "SELECT id_per, foto_per FROM  plantilla_personal
        
        WHERE  ci_per = '$doc_2'

        GROUP by ci_per Limit 1 ";

$datos_plantilla_bus2 = mysqli_query($enlace, $query_bus2) or die(mysqli_error());
$row_datos_plantilla2 = mysqli_fetch_array($datos_plantilla_bus2); 
$totalRows_datos_plantilla_bus2 = mysqli_num_rows($datos_plantilla_bus2);

$fotoA2 = $row_datos_plantilla2["foto_per"];


if ( $fotoA2 != "") {

  $exitoZ .= "&nbsp; Foto 2 &nbsp; <i class=\"fas fa-check\"></i>&nbsp; ; "; 
  $d2= "1";

  $result2 = $row_datos_plantilla2["id_per"];

}


else {

  $exitoZ.="<span style=\"color:red; \">&nbsp; Foto 2 &nbsp; <i class=\"fas fa-times\"></i></span>&nbsp; ;";

}




mysqli_close($enlace); 



      }




  }



  if (!$_POST['imp_doc3'] == "")     
    {  

if (strlen($_POST['imp_doc3']) <=6 )  // no sea mayor a 40 caracteres
    {   $errorZ .= "- Ingrese más de 6 números en el documento 3. "; } 



    else { 

     $doc_3 = $_POST['imp_doc3'];



     include("../conectar.php");


      $query_bus3 = "SELECT id_per, foto_per FROM  plantilla_personal
        
        WHERE  ci_per = '$doc_3'

        GROUP by ci_per Limit 1 ";

$datos_plantilla_bus3 = mysqli_query($enlace, $query_bus3) or die(mysqli_error());
$row_datos_plantilla3 = mysqli_fetch_array($datos_plantilla_bus3); 
$totalRows_datos_plantilla_bus3 = mysqli_num_rows($datos_plantilla_bus3);

$fotoA3 = $row_datos_plantilla3["foto_per"];


if ( $fotoA3 != "") {

  $exitoZ .= "&nbsp; Foto 3 &nbsp; <i class=\"fas fa-check\"></i>&nbsp; ; "; 
  $d3= "1";

  $result3 = $row_datos_plantilla3["id_per"];

}


else {

  $exitoZ.="<span style=\"color:red; \">&nbsp; Foto 3 &nbsp; <i class=\"fas fa-times\"></i></span>&nbsp; ; ";

}

mysqli_close($enlace); 



      }



  }









$enlace_1 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_carnet1_vert.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result1."\">

<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir Carnet 1</a>

</form>


";



$enlace_2 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_carnet1_vert.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result2."\">

<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir Carnet 2</a>

</form>


";


$enlace_3 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_carnet1_vert.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result3."\">

<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir Carnet 3</a>

</form>


";




$enlace_4 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_carnet2_vert.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result1."\">
<input type=\"hidden\" id=\"id_per2\" name=\"id_per2\" value=\" ".$result2."\">


<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir Carnet 1 & 2</a>

</form>


";





$enlace_5 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_carnet2_vert.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result2."\">
<input type=\"hidden\" id=\"id_per2\" name=\"id_per2\" value=\" ".$result3."\">


<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir Carnet 2 & 3</a>

</form>


";




$enlace_6 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_carnet2_vert.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result1."\">
<input type=\"hidden\" id=\"id_per2\" name=\"id_per2\" value=\" ".$result3."\">


<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir Carnet 1 & 3</a>

</form>


";


$enlace_7 = "


<form target=\"_blank\" action=\"zzz_impresiones/imp_carnet3_vert.php\" id=\"myform1\"  method=\"POST\">


<input type=\"hidden\" id=\"id_per1\" name=\"id_per1\" value=\" ".$result1."\">
<input type=\"hidden\" id=\"id_per2\" name=\"id_per2\" value=\" ".$result2."\">
<input type=\"hidden\" id=\"id_per3\" name=\"id_per3\" value=\" ".$result3."\">


<a href=\"#\" onclick=\"document.getElementById('myform1').submit()\">Imprimir 3 carnets.</a>

</form>


";






if ($d1 == '1' AND $d2 == '0' AND $d3 == '0' )

 {
  $exitoZ .= "&nbsp;&nbsp;&nbsp;".$enlace_1." ";
}


if ($d1 == '0' AND $d2 == '1' AND $d3 == '0' )

 {
  $exitoZ .= "&nbsp;&nbsp;&nbsp;".$enlace_2." ";
}



if ($d1 == '0' AND $d2 == '0' AND $d3 == '1' )

 {
  $exitoZ .= "&nbsp;&nbsp;&nbsp;".$enlace_3." ";
}







if ($d1 == '1' AND $d2 == '1' AND $d3 == '0' )

 {
  $exitoZ .= "&nbsp;&nbsp;&nbsp;".$enlace_4." ";
}



if ($d1 == '0' AND $d2 == '1' AND $d3 == '1' )

 {
  $exitoZ .= "&nbsp;&nbsp;&nbsp;".$enlace_5." ";
}



if ($d1 == '1' AND $d2 == '0' AND $d3 == '1' )

 {
  $exitoZ .= "&nbsp;&nbsp;&nbsp;".$enlace_6." ";
}




if ($d1 == '1' AND $d2 == '1' AND $d3 == '1' )

 {
  $exitoZ .= "&nbsp;&nbsp;&nbsp;".$enlace_7." ";
}





    } 




?>



<?php include ("Header.php"); ?>


        <div class="content-wrapper">
            <div class="container-fluid">

<div class="form-row">
<div class="col-md-6 col-lg-6 mb-3">
                <div class="input-group-text alert-primary" role="alert">
                    <i class="fa fa-users fa-lg "></i> &nbsp; &nbsp; Personal registrado en el plantel. 
                </div>
</div>



 <div class="col-md-5 col-lg-5 mb-3">
              

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
 


 <!-- Icon Cards-->
      
      <div class="row">


  <div class="col-xl-3 col-sm-6 mb-3" >
          <div class="card text-white relleno-vino o-hidden h-100">

            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-search"></i>
              </div>

            <div class="col-lg-9 col-md-12" style="margin-left: -25px; margin-top: -10px;">

              <span class="" style="font-size: 18px;">Buscar por:</span>

  <script type="text/javascript" src="00_auto/jquery-1.12.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="00_auto/jquery-ui.css">
  <script type="text/javascript" src="00_auto/jquery-ui.js"></script>
  <script type="text/javascript" src="00_auto/jquery.ui.autocomplete.scroll.min.js"></script> 




<form method="POST">

           <div class="input-group input-group-sm mb-1" style="margin-top: 10px;">
            
            <input type="text" class="form-control" name="buscar_empleado" placeholder="Doc de Id...">
            <div class="input-group-append">
            <button type="submit" name="buscalo_id" class="btn btn-default"><i style="color:#86333B;"><i class="fas fa-chevron-circle-right fa-lg "></i></i></button>
            </div>
          </div>
 </form>
 <form method="POST">

           <div class="input-group input-group-sm mb-1">
            
            <input type="text" class="form-control" id="buscar_empleado2" name="buscar_empleado2" placeholder="Nombre...">

<?php

include("../conectar.php");

      $query_bus_name = "SELECT * FROM  plantilla_contratados, plantilla_personal
        
        WHERE  plantilla_contratados.id_per = plantilla_personal.id_per

        and plantilla_contratados.status = 1 group by nombre_per ";

$datos_plantilla_bus_name = mysqli_query($enlace, $query_bus_name) or die(mysqli_error());
$totalRows_datos_plantilla_bus_name = mysqli_num_rows($datos_plantilla_bus_name); 


$el_listado_name = array();

while ($row_name = mysqli_fetch_array($datos_plantilla_bus_name)) {
        /*  $estudiantesNN = $row['nombre_estu'].' '.$row['apellidos_estu']; */
          $estudiantes_name = $row_name['nombre_per'];
          array_push ($el_listado_name, $estudiantes_name );          
}
mysqli_close($enlace);
?>

<script type="text/javascript">

    $(document).ready(function () {
      var items_name = <?= json_encode($el_listado_name);  ?>

$("#buscar_empleado2").autocomplete({
  source: items_name,
  minLength: 3,
  autoFocus: true,
  maxShowItems: 5
});
        });

  </script>



            <div class="input-group-append">
            <button type="submit" name="buscalo_name" class="btn btn-default"><i style="color:#86333B;"><i class="fas fa-chevron-circle-right fa-lg "></i></i></button>
            </div>
          </div>
 </form>
 <form method="POST">

           <div class="input-group input-group-sm mb-1">
            
            <input type="text" class="form-control" id="buscar_empleado3" name="buscar_empleado3" placeholder="Apellido...">


<?php

include("../conectar.php");

      $query_bus_ape = "SELECT * FROM  plantilla_contratados, plantilla_personal
        
        WHERE  plantilla_contratados.id_per = plantilla_personal.id_per

        and plantilla_contratados.status = 1 group by nombre_per ";

$datos_plantilla_bus_ape = mysqli_query($enlace, $query_bus_ape) or die(mysqli_error());
$totalRows_datos_plantilla_bus_ape = mysqli_num_rows($datos_plantilla_bus_ape); 


$el_listado_ape = array();

while ($row_ape = mysqli_fetch_array($datos_plantilla_bus_ape)) {
        /*  $estudiantesNN = $row['nombre_estu'].' '.$row['apellidos_estu']; */
          $estudiantes_ape = $row_ape['apellido_per'];
          array_push ($el_listado_ape, $estudiantes_ape );          
}
mysqli_close($enlace);
?>

<script type="text/javascript">

    $(document).ready(function () {
      var items_ape = <?= json_encode($el_listado_ape);  ?>

$("#buscar_empleado3").autocomplete({
  source: items_ape,
  minLength: 3,
  autoFocus: true,
  maxShowItems: 5
});
        });

  </script>














            <div class="input-group-append">
            <button type="submit" name="buscalo_ape" class="btn btn-default"><i style="color:#86333B;"><i class="fas fa-chevron-circle-right fa-lg "></i></i></button>
            </div>
          </div>
 </form>

            </div>              
            </div>   

          </div>
      </div>















        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-orange o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <div class="mr-5 cantidadzzzpe">Agregar</div>
              <div class="infozzz">Personal</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" href="zona_adm_plantilla_add.php">
              <span class="float-left">Abrir formulario</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>






  <div class="col-xl-3 col-sm-6 mb-3" >
          <div class="card text-white relleno-fresal o-hidden h-100">

<form method="POST">

            <div class="card-body">
              <div class="card-body-icon">
                <i class="far fa-id-card"></i>
              </div>

            <div class="col-lg-9 col-md-12" style="margin-left: -25px; margin-top: -4px;">

<span class="" style="font-size: 14px;">El Doc. debe estar en el sistema.</span>


<div class="input-group input-group-sm mb-1 ">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">1.</span>
  </div>
  <input type="text" name="imp_doc1" class="form-control" placeholder="Núm de documento...." >
</div>

<div class="input-group input-group-sm mb-1 ">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">2.</span>
  </div>
  <input type="text" name="imp_doc2" class="form-control" placeholder="Núm de documento...." >
</div>

<div class="input-group input-group-sm mb-1  ">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">3.</span>
  </div>
  <input type="text" name="imp_doc3" class="form-control" placeholder="Núm de documento...." >
</div>


<div class="input-group input-group-sm  ">
  <button type="submit" name="busca_ci" class="btn btn-sm btn-default btn-block"><i style="color:#cc0033;"><b>" Imprimir Documentos de ID "</b></i></button>
</div>


            </div>              
            </div>   
 </form>
          </div>
      </div>







 






<?php

include("../conectar.php");

$query_horient = "SELECT id_tema, horientacion FROM zz_tema where id_tema = '1' LIMIT 1";

$datos_horient = mysqli_query($enlace, $query_horient) or die(mysqli_error());

$row_datos_horient = mysqli_fetch_array($datos_horient );

mysqli_close($enlace);

$la_horient = $row_datos_horient['horientacion'];

?>    
    







 


<!-- carnet vertical  -->
      <div class="col-xl-3 col-sm-6 mb-3"  <?php if ($la_horient == 'Horizontal') {?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-salmon_a o-hidden h-100">

<form method="POST">

            <div class="card-body">
              <div class="card-body-icon">
                <i class="far fa-id-badge"></i>
              </div>

            <div class="col-lg-9 col-md-12" style="margin-left: -25px; margin-top: -4px;">
              <span class="" style="font-size: 14px;">La foto debe estar en el sistema.</span>

<div class="input-group input-group-sm mb-1 ">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">1.</span>
  </div>
  <input type="text" name="imp_doc1" class="form-control" placeholder="Núm de documento...." >
</div>

<div class="input-group input-group-sm mb-1 ">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">2.</span>
  </div>
  <input type="text" name="imp_doc2" class="form-control" placeholder="Núm de documento...." >
</div>

<div class="input-group input-group-sm mb-1  ">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">3.</span>
  </div>
  <input type="text" name="imp_doc3" class="form-control" placeholder="Núm de documento...." >
</div>

<div class="input-group input-group-sm  ">
  <button type="submit" name="busca_ci_carnet_vert" class="btn btn-sm btn-default btn-block"><i style="color:#E8673A;"><b>" Imp. Carnets Verticales"</b></i></button>
</div>
            </div>              
            </div>   
 </form>
          </div>
      </div>








<!-- carnet vertical  -->
      <div class="col-xl-3 col-sm-6 mb-3" <?php if ($la_horient == 'Vertical') {?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-salmon_a o-hidden h-100">

<form method="POST">

            <div class="card-body">
              <div class="card-body-icon">
             <i class="fas fa-id-card-alt"></i>
              </div>

            <div class="col-lg-9 col-md-12" style="margin-left: -25px; margin-top: -4px;">
              <span class="" style="font-size: 14px;">La foto debe estar en el sistema.</span>

<div class="input-group input-group-sm mb-1 ">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">1.</span>
  </div>
  <input type="text" name="imp_doc1" class="form-control" placeholder="Núm de documento...." >
</div>

<div class="input-group input-group-sm mb-1 ">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">2.</span>
  </div>
  <input type="text" name="imp_doc2" class="form-control" placeholder="Núm de documento...." >
</div>

<div class="input-group input-group-sm mb-1  ">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">3.</span>
  </div>
  <input type="text" name="imp_doc3" class="form-control" placeholder="Núm de documento...." >
</div>

<div class="input-group input-group-sm  ">
  <button type="submit" name="busca_ci_carnet" class="btn btn-sm btn-default btn-block"><i style="color:#E8673A;"><b>" Imp. Carnets Horizontales"</b></i></button>
</div>
            </div>              
            </div>   
 </form>
          </div>
      </div>







</div>


 <div class="row">
     


           <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_plantilla->total==0){?>style="display:none"<?php } ?>  >
          <div class="card text-white relleno-purpplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="far fa-bell"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_plantilla->total; ?>&nbsp;En</div>
              <div class="infozzz">plantilla.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"

href="plantilla_personal_00_global.php?ttitulo=Laboran en el plantel">


              <span class="float-left">Listado completo</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
      </div>






    








      <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_mujeres->total==0){?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-moraoscuro o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-female"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_mujeres->total; ?></div>
              <div class="infozzz">Mujeres</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"  

href="plantilla_personal_02_muj.php?ttitulo=Personal Femenino">

              <span class="float-left">Lista con C.I. y profesiones</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
      </div>




      <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_hombres->total==0){?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-azulgris o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-male"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_hombres->total; ?></div>
              <div class="infozzz">Hombres</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" 

href="plantilla_personal_02_hom.php?ttitulo=Personal Masculino">

              <span class="float-left">Lista con C.I. y profesiones</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
      </div>



        <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_plantillaO->total==0){?>style="display:none"<?php } ?>  >
          <div class="card text-white relleno-gris o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="far fa-bell-slash"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_plantillaO->total; ?>&nbsp; Fuera</div>
              <div class="infozzzpe">de plantilla.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" 

href="plantilla_personal_retirado.php">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>







</div>






 <div class="row">


     





<?php

if ($row_cumplen->total !="0" ) {
    
  $cumple_img = 'fas fa-birthday-cake fa-spin';
  
}

else { 
       $cumple_img = 'fas fa-birthday-cake';
      
          }

 ?>



<div class="col-xl-3 col-sm-6 mb-3"  <?php if ($row_cumplen->total==0){?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-pink o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
               <i class="<?php echo $cumple_img; ?>"></i>
              </div>
        <div class="mr-5 cantidadzzzpe">Hoy hay <?php echo $row_cumplen->total; ?></div>
              <div class="infozzz">cumpleaño(s).</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" href="plantilla_personal_cumplen_hoy.php">
              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
      </div>




     


      


      <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_cumplenM->total==0){?>style="display:none"<?php } ?>>
          <div class="card text-white relleno-lila o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-gift"></i>
              </div>
        <div class="mr-5 cantidadzzzsmall"><?php echo $row_cumplenM->total; ?> Cumplen</div>
              <div class="infozzz">este mes.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1" href="plantilla_personal_cumplen.php">
              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
      </div>


       <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_plantilla->total==0){?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-green o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">

        <span class="fa-layers fa-fw">
    <i class="fas fa-heart" ></i>
    <i class="fa-inverse fas fa-award" data-fa-transform="shrink-7" style="color:#22792F"></i>
  </span>        
                

              </div>
              <div class="mr-5 cantidadzzz">Años</div>
              <div class="infozzz">de servicio.</div>

            </div>

<div class="form-row mb-2 ml-2">

<a href="plantilla_personal_antiguedad.php" class="btn btn-light btn-sm mr-2" role="button" style="width: 140px;"><b style="color:#22792F ; ">Top "<?php echo $mediaMMRR; ?>"</b></a>

<a href="plantilla_personal_antiguedad_all.php" class="btn btn-light btn-sm" role="button" style="width: 140px;"><b style="color:#22792F ; ">Lista Completa</b></a>          
</div>



          </div>
      </div>












   
















        
    

    </div>


<h4 class="glowwhite mt-2 mb-2">Grupos:</h4>


 <div class="row">


      <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_profesores===0){?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-indigo o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">

               <i class="fas fa-user-tie"></i>

              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_profesores; ?></div>
              <div class="infozzz">Profesores</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"  

href="plantilla_personal_00_prof.php?ttitulo=Profesores del plantel">

              <span class="float-left">Ver Listado</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>


      <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_directores===0){?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-gavel"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_directores; ?></div>
              <div class="infozzz">Directores</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"   

href="plantilla_personal_01.php?consul=1&ttitulo=Personal directivo">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
      </div>


      <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_dpto===0){?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-user-edit"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_dpto; ?>&nbsp;Dpto.</div>
              <div class="infozzz">de evaluación</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"   

href="plantilla_personal_01.php?consul=9&ttitulo=Dpto. de Evaluación">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
      </div>


      <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_administradores===0){?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-chart-pie"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_administradores; ?></div>
              <div class="infozzz">Admin.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"   

href="plantilla_personal_01.php?consul=2&ttitulo=Administradores">

              <span class="float-left">Administradores</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
      </div>


</div>
<div class="row">

      <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_coord===0){?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-browpdarkx o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-book"></i>
              </div>
              <div class="mr-5 cantidadzzzsmall"><?php echo $row_coord; ?></div>
              <div class="infozzz">Coordinadores</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"   

href="plantilla_personal_01.php?consul=14&ttitulo=Coordinadores">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
      </div>


      


      <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_secret===0){?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-browpdarkx o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-archive"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_secret; ?></div>
              <div class="infozzz">Secretarios</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"    

href="plantilla_personal_01.php?consul=3&ttitulo=Secretariado">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
      </div>


       <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_asis===0){?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-browpdarkx o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="far fa-list-alt"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_asis; ?></div>
              <div class="infozzz">Asistentes</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"     

href="plantilla_personal_01.php?consul=10&ttitulo=Asistentes del plantel">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
      </div>



      <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_psico===0){?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-ocean o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-book-reader"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_psico; ?></div>
              <div class="infozzz">Psicopedagogos</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"     

href="plantilla_personal_01.php?consul=17&ttitulo=Psicopedagogos del plantel">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
      </div>


     

</div>



<div class="row">


   <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_med===0){?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-fresal o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-user-md"></i>
              </div>
              <div class="mr-5 cantidadzzzpe"><?php echo $row_med; ?>&nbsp;Atención</div>
              <div class="infozzz">medica.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"     

href="plantilla_personal_01.php?consul=13&ttitulo=Personal medico">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
      </div>


  <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_cult===0){?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-fresal o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-universal-access"></i>
              </div>
              <div class="mr-5 cantidadpe"><?php echo $row_cult; ?>&nbsp;Dpto. de</div>
              <div class="infozzz">cultura.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"      

href="plantilla_personal_01.php?consul=15&ttitulo=Dpto. de Cultura">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
      </div>



      <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_med===0){?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-fresal o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-volleyball-ball"></i>
              </div>
              <div class="mr-5 cantidadpe"><?php echo $row_med; ?>&nbsp;Dpto. de</div>
              <div class="infozzz">deportes.</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"      

href="plantilla_personal_01.php?consul=16&ttitulo=Dpto. de Deportes">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
      </div>



</div>
<div class="row">


        <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_mant===0){?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-green o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-user-clock"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_mant; ?></div>
              <div class="infozzzpe">Mantenimiento</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"       

href="plantilla_personal_01.php?consul=12&ttitulo=Personal mantenimiento">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>   


        <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_vigi===0){?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-green o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-user-shield"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_vigi; ?></div>
              <div class="infozzz">Vigilantes</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"       

href="plantilla_personal_01.php?consul=11&ttitulo=Personal de vigilancia">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>   



        <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_obre===0){?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-green o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-people-carry"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_obre; ?></div>
              <div class="infozzz">Obreros</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"        

href="plantilla_personal_01.php?consul=8&ttitulo=Personal obrero">

              <span class="float-left">Ver Lista</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>               


        <div class="col-xl-3 col-sm-6 mb-3" <?php if ($row_varios===0){?>style="display:none"<?php } ?> >
          <div class="card text-white relleno-vino o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-hands-helping"></i>
              </div>
              <div class="mr-5 cantidadzzz"><?php echo $row_varios; ?></div>
              <div class="infozzz">Varios</div>
            </div>
            <a class=" card-footer card-footerz text-white clearfix small z-1"        

href="plantilla_personal_01.php?consul=6&ttitulo=Personal varios">

              <span class="float-left">Ver Listado</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

        


               

      </div>  <!-- cierre row -->




     
      
     




<!-- Cierre Icon Cards-->











                           

            </div>   <!-- cierre container fluid -->
        </div>  <!-- cierre wrapper -->




<?php include ("Footer.php"); ?>
