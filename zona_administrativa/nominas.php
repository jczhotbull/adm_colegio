<?php

include("identificador.php");

   if ($_SESSION ['cargo'] != 'Administrador' && $_SESSION ['cargo'] != 'Cajero'  )

    {

      session_unset();                     // libera todas las variables de sessión
        setcookie("id", "", time()-60*60);   // crea la cookie id con el valor vacio y que caduque una hora antes.
        $_COOKIE ['id']="";                  // borra el valor de id contenido en el cookie, por medida extra

        setcookie("cargo", "", time()-60*60);   // crea la cookie cargo con el valor vacio y que caduque una hora antes.
        $_COOKIE ['cargo']="";                  // borra el valor de cargo contenido en el cookie, por medida extra

        header("Location: ../index.php");

    }

$id_del_periodo = $_GET['proo'];


include("../conectar.php");


$query_perio = "SELECT * FROM temporada_escolar where id_periodo_es = '$id_del_periodo' limit 1 ";

$datos_perio = mysqli_query($enlace, $query_perio) or die(mysqli_error());
$totaldatos_perio = mysqli_fetch_array($datos_perio); 

$este_es_el_periodo = $totaldatos_perio['periodo_escolar'];



mysqli_close($enlace);




if(isset($_POST['mes_01_a']))
        {
$este_dir_dir = $_POST['dir_mes_01_a'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_01_b']))
        {
$este_dir_dir = $_POST['dir_mes_01_b'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_01_c']))
        {
$este_dir_dir = $_POST['dir_mes_01_c'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }


if(isset($_POST['mes_01_d']))
        {
$este_dir_dir = $_POST['dir_mes_01_d'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }





if(isset($_POST['mes_02_a']))
        {
$este_dir_dir = $_POST['dir_mes_02_a'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_02_b']))
        {
$este_dir_dir = $_POST['dir_mes_02_b'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_02_c']))
        {
$este_dir_dir = $_POST['dir_mes_02_c'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }


if(isset($_POST['mes_02_d']))
        {
$este_dir_dir = $_POST['dir_mes_02_d'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_03_a']))
        {
$este_dir_dir = $_POST['dir_mes_03_a'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_03_b']))
        {
$este_dir_dir = $_POST['dir_mes_03_b'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_03_c']))
        {
$este_dir_dir = $_POST['dir_mes_03_c'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }


if(isset($_POST['mes_03_d']))
        {
$este_dir_dir = $_POST['dir_mes_03_d'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }





if(isset($_POST['mes_04_a']))
        {
$este_dir_dir = $_POST['dir_mes_04_a'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_04_b']))
        {
$este_dir_dir = $_POST['dir_mes_04_b'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_04_c']))
        {
$este_dir_dir = $_POST['dir_mes_04_c'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }


if(isset($_POST['mes_04_d']))
        {
$este_dir_dir = $_POST['dir_mes_04_d'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }




if(isset($_POST['mes_05_a']))
        {
$este_dir_dir = $_POST['dir_mes_05_a'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_05_b']))
        {
$este_dir_dir = $_POST['dir_mes_05_b'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_05_c']))
        {
$este_dir_dir = $_POST['dir_mes_05_c'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }


if(isset($_POST['mes_05_d']))
        {
$este_dir_dir = $_POST['dir_mes_05_d'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }




if(isset($_POST['mes_06_a']))
        {
$este_dir_dir = $_POST['dir_mes_06_a'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_06_b']))
        {
$este_dir_dir = $_POST['dir_mes_06_b'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_06_c']))
        {
$este_dir_dir = $_POST['dir_mes_06_c'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }


if(isset($_POST['mes_06_d']))
        {
$este_dir_dir = $_POST['dir_mes_06_d'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }




if(isset($_POST['mes_07_a']))
        {
$este_dir_dir = $_POST['dir_mes_07_a'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_07_b']))
        {
$este_dir_dir = $_POST['dir_mes_07_b'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_07_c']))
        {
$este_dir_dir = $_POST['dir_mes_07_c'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }


if(isset($_POST['mes_07_d']))
        {
$este_dir_dir = $_POST['dir_mes_07_d'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_08_a']))
        {
$este_dir_dir = $_POST['dir_mes_08_a'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_08_b']))
        {
$este_dir_dir = $_POST['dir_mes_08_b'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_08_c']))
        {
$este_dir_dir = $_POST['dir_mes_08_c'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }


if(isset($_POST['mes_08_d']))
        {
$este_dir_dir = $_POST['dir_mes_08_d'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }




if(isset($_POST['mes_09_a']))
        {
$este_dir_dir = $_POST['dir_mes_09_a'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_09_b']))
        {
$este_dir_dir = $_POST['dir_mes_09_b'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_09_c']))
        {
$este_dir_dir = $_POST['dir_mes_09_c'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }


if(isset($_POST['mes_09_d']))
        {
$este_dir_dir = $_POST['dir_mes_09_d'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_10_a']))
        {
$este_dir_dir = $_POST['dir_mes_10_a'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_10_b']))
        {
$este_dir_dir = $_POST['dir_mes_10_b'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_10_c']))
        {
$este_dir_dir = $_POST['dir_mes_10_c'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }


if(isset($_POST['mes_10_d']))
        {
$este_dir_dir = $_POST['dir_mes_10_d'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_11_a']))
        {
$este_dir_dir = $_POST['dir_mes_11_a'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_11_b']))
        {
$este_dir_dir = $_POST['dir_mes_11_b'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_11_c']))
        {
$este_dir_dir = $_POST['dir_mes_11_c'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }


if(isset($_POST['mes_11_d']))
        {
$este_dir_dir = $_POST['dir_mes_11_d'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_12_a']))
        {
$este_dir_dir = $_POST['dir_mes_12_a'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_12_b']))
        {
$este_dir_dir = $_POST['dir_mes_12_b'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['mes_12_c']))
        {
$este_dir_dir = $_POST['dir_mes_12_c'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }


if(isset($_POST['mes_12_d']))
        {
$este_dir_dir = $_POST['dir_mes_12_d'];
$este_periodo = $_POST['dir_periodo'];
$este_mes = $_POST['dir_mes'];
$este_atributo = $_POST['dir_mes_atributo'];
include("../conectar.php");
          $sql88_form_1 = "UPDATE directorio SET directorio = '$este_dir_dir',
                                                 dir_periodo = '$este_periodo',
                                                 dir_mes = '$este_mes',
                                                 dir_atributo = '$este_atributo'
                                                 WHERE id_directorio = '1' "; 
          $sql88_form_1_haz = mysqli_query($enlace,$sql88_form_1) or die(mysqli_error());
mysqli_close($enlace);
header("Location: explorador.php ");
        }



if(isset($_POST['save_atributos']))
        {

$este_primer_01a_atributo = $_POST['primer_01a_atributo'];
$este_primer_01b_atributo = $_POST['primer_01b_atributo'];
$este_primer_01c_atributo = $_POST['primer_01c_atributo'];
$este_primer_01d_atributo = $_POST['primer_01d_atributo'];

$este_segundo_02a_atributo = $_POST['segundo_02a_atributo'];
$este_segundo_02b_atributo = $_POST['segundo_02b_atributo'];
$este_segundo_02c_atributo = $_POST['segundo_02c_atributo'];
$este_segundo_02d_atributo = $_POST['segundo_02d_atributo'];

$este_tercer_03a_atributo = $_POST['tercer_03a_atributo'];
$este_tercer_03b_atributo = $_POST['tercer_03b_atributo'];
$este_tercer_03c_atributo = $_POST['tercer_03c_atributo'];
$este_tercer_03d_atributo = $_POST['tercer_03d_atributo'];

$este_cuarto_04a_atributo = $_POST['cuarto_04a_atributo'];
$este_cuarto_04b_atributo = $_POST['cuarto_04b_atributo'];
$este_cuarto_04c_atributo = $_POST['cuarto_04c_atributo'];
$este_cuarto_04d_atributo = $_POST['cuarto_04d_atributo'];

$este_quinto_05a_atributo = $_POST['quinto_05a_atributo'];
$este_quinto_05b_atributo = $_POST['quinto_05b_atributo'];
$este_quinto_05c_atributo = $_POST['quinto_05c_atributo'];
$este_quinto_05d_atributo = $_POST['quinto_05d_atributo'];

$este_sexto_06a_atributo = $_POST['sexto_06a_atributo'];
$este_sexto_06b_atributo = $_POST['sexto_06b_atributo'];
$este_sexto_06c_atributo = $_POST['sexto_06c_atributo'];
$este_sexto_06d_atributo = $_POST['sexto_06d_atributo'];

$este_septimo_07a_atributo = $_POST['septimo_07a_atributo'];
$este_septimo_07b_atributo = $_POST['septimo_07b_atributo'];
$este_septimo_07c_atributo = $_POST['septimo_07c_atributo'];
$este_septimo_07d_atributo = $_POST['septimo_07d_atributo'];

$este_octavo_08a_atributo = $_POST['octavo_08a_atributo'];
$este_octavo_08b_atributo = $_POST['octavo_08b_atributo'];
$este_octavo_08c_atributo = $_POST['octavo_08c_atributo'];
$este_octavo_08d_atributo = $_POST['octavo_08d_atributo'];

$este_noveno_09a_atributo = $_POST['noveno_09a_atributo'];
$este_noveno_09b_atributo = $_POST['noveno_09b_atributo'];
$este_noveno_09c_atributo = $_POST['noveno_09c_atributo'];
$este_noveno_09d_atributo = $_POST['noveno_09d_atributo'];

$este_decimo_10a_atributo = $_POST['decimo_10a_atributo'];
$este_decimo_10b_atributo = $_POST['decimo_10b_atributo'];
$este_decimo_10c_atributo = $_POST['decimo_10c_atributo'];
$este_decimo_10d_atributo = $_POST['decimo_10d_atributo'];

$este_onceavo_11a_atributo = $_POST['onceavo_11a_atributo'];
$este_onceavo_11b_atributo = $_POST['onceavo_11b_atributo'];
$este_onceavo_11c_atributo = $_POST['onceavo_11c_atributo'];
$este_onceavo_11d_atributo = $_POST['onceavo_11d_atributo'];

$este_doceavo_12a_atributo = $_POST['doceavo_12a_atributo'];
$este_doceavo_12b_atributo = $_POST['doceavo_12b_atributo'];
$este_doceavo_12c_atributo = $_POST['doceavo_12c_atributo'];
$este_doceavo_12d_atributo = $_POST['doceavo_12d_atributo'];



include("../conectar.php");



          $sql_atre = "UPDATE temporada_escolar SET 01a = '$este_primer_01a_atributo',
                                               01b = '$este_primer_01b_atributo',
                                               01c = '$este_primer_01c_atributo',
                                               01d = '$este_primer_01d_atributo',
                                               02a = '$este_segundo_02a_atributo',
02b = '$este_segundo_02b_atributo',
02c = '$este_segundo_02c_atributo',
02d = '$este_segundo_02d_atributo',
03a = '$este_tercer_03a_atributo',
03b = '$este_tercer_03b_atributo',
03c = '$este_tercer_03c_atributo',
03d = '$este_tercer_03d_atributo',
04a = '$este_cuarto_04a_atributo',
04b = '$este_cuarto_04b_atributo',
04c = '$este_cuarto_04c_atributo',
04d = '$este_cuarto_04d_atributo',
05a = '$este_quinto_05a_atributo',
05b = '$este_quinto_05b_atributo',
05c = '$este_quinto_05c_atributo',
05d = '$este_quinto_05d_atributo',
06a = '$este_sexto_06a_atributo',
06b = '$este_sexto_06b_atributo',
06c = '$este_sexto_06c_atributo',
06d = '$este_sexto_06d_atributo',
07a = '$este_septimo_07a_atributo',
07b = '$este_septimo_07b_atributo',
07c = '$este_septimo_07c_atributo',
07d = '$este_septimo_07d_atributo',
08a = '$este_octavo_08a_atributo',
08b = '$este_octavo_08b_atributo',
08c = '$este_octavo_08c_atributo',
08d = '$este_octavo_08d_atributo',
09a = '$este_noveno_09a_atributo',
09b = '$este_noveno_09b_atributo',
09c = '$este_noveno_09c_atributo',
09d = '$este_noveno_09d_atributo',
10a = '$este_decimo_10a_atributo',
10b = '$este_decimo_10b_atributo',
10c = '$este_decimo_10c_atributo',
10d = '$este_decimo_10d_atributo',
11a = '$este_onceavo_11a_atributo',
11b = '$este_onceavo_11b_atributo',
11c = '$este_onceavo_11c_atributo',
11d = '$este_onceavo_11d_atributo',
12a = '$este_doceavo_12a_atributo',
12b = '$este_doceavo_12b_atributo',
12c = '$este_doceavo_12c_atributo',
12d = '$este_doceavo_12d_atributo'
                                                            
WHERE id_periodo_es ='$id_del_periodo' ";

 $sql88_form_1_hazer = mysqli_query($enlace,$sql_atre) or die(mysqli_error());

mysqli_close($enlace);

}









?>



<?php include ("Header.php"); ?>


        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="alert alert-primary" role="alert">
                    <i class="fas fa-piggy-bank fa-lg "></i> &nbsp; &nbsp; Administrar Comprobantes Plantilla del Colegio: <b><?php echo $este_es_el_periodo; ?></b>.
                </div>
      

<p class="text-danger ml-3"><b>Info:</b> Por intermedio de esta página usted podrá cargar los archivos correspondientes a los pagos de nómina; todo el personal que tenga acceso al sistema observará dichos registros.</p>


       <h4 class="glowwhite ml-3 mt-2 mb-3">Año Escolar:</h4> 






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


if ($primer_pago_mes == '01') { $primer_icono = 'fas fa-chess-king'; }
if ($primer_pago_mes == '02') { $primer_icono = 'fas fa-mask'; }
if ($primer_pago_mes == '03') { $primer_icono = 'fas fa-female'; }
if ($primer_pago_mes == '04') { $primer_icono = 'fas fa-church';  }
if ($primer_pago_mes == '05') { $primer_icono = 'fas fa-user-tie';  }
if ($primer_pago_mes == '06') { $primer_icono = 'fas fa-male'; }
if ($primer_pago_mes == '07') { $primer_icono = 'fas fa-child'; }
if ($primer_pago_mes == '08') { $primer_icono = 'fas fa-users';  }
if ($primer_pago_mes == '09') { $primer_icono = 'fas fa-language'; }
if ($primer_pago_mes == '10') { $primer_icono = 'fas fa-anchor';  }
if ($primer_pago_mes == '11') { $primer_icono = 'fas fa-music'; }
if ($primer_pago_mes == '12') { $primer_icono = 'fas fa-sleigh'; }

if ($segundo_pago_mes == '01') { $segundo_icono = 'fas fa-chess-king'; }
if ($segundo_pago_mes == '02') { $segundo_icono = 'fas fa-mask'; }
if ($segundo_pago_mes == '03') { $segundo_icono = 'fas fa-female'; }
if ($segundo_pago_mes == '04') { $segundo_icono = 'fas fa-church';  }
if ($segundo_pago_mes == '05') { $segundo_icono = 'fas fa-user-tie';  }
if ($segundo_pago_mes == '06') { $segundo_icono = 'fas fa-male'; }
if ($segundo_pago_mes == '07') { $segundo_icono = 'fas fa-child'; }
if ($segundo_pago_mes == '08') { $segundo_icono = 'fas fa-users';  }
if ($segundo_pago_mes == '09') { $segundo_icono = 'fas fa-language'; }
if ($segundo_pago_mes == '10') { $segundo_icono = 'fas fa-anchor';  }
if ($segundo_pago_mes == '11') { $segundo_icono = 'fas fa-music'; }
if ($segundo_pago_mes == '12') { $segundo_icono = 'fas fa-sleigh'; }

if ($tercero_pago_mes == '01') { $tercero_icono = 'fas fa-chess-king'; }
if ($tercero_pago_mes == '02') { $tercero_icono = 'fas fa-mask'; }
if ($tercero_pago_mes == '03') { $tercero_icono = 'fas fa-female'; }
if ($tercero_pago_mes == '04') { $tercero_icono = 'fas fa-church';  }
if ($tercero_pago_mes == '05') { $tercero_icono = 'fas fa-user-tie';  }
if ($tercero_pago_mes == '06') { $tercero_icono = 'fas fa-male'; }
if ($tercero_pago_mes == '07') { $tercero_icono = 'fas fa-child'; }
if ($tercero_pago_mes == '08') { $tercero_icono = 'fas fa-users';  }
if ($tercero_pago_mes == '09') { $tercero_icono = 'fas fa-language'; }
if ($tercero_pago_mes == '10') { $tercero_icono = 'fas fa-anchor';  }
if ($tercero_pago_mes == '11') { $tercero_icono = 'fas fa-music'; }
if ($tercero_pago_mes == '12') { $tercero_icono = 'fas fa-sleigh'; }

if ($cuarto_pago_mes == '01') { $cuarto_icono = 'fas fa-chess-king'; }
if ($cuarto_pago_mes == '02') { $cuarto_icono = 'fas fa-mask'; }
if ($cuarto_pago_mes == '03') { $cuarto_icono = 'fas fa-female'; }
if ($cuarto_pago_mes == '04') { $cuarto_icono = 'fas fa-church';  }
if ($cuarto_pago_mes == '05') { $cuarto_icono = 'fas fa-user-tie';  }
if ($cuarto_pago_mes == '06') { $cuarto_icono = 'fas fa-male'; }
if ($cuarto_pago_mes == '07') { $cuarto_icono = 'fas fa-child'; }
if ($cuarto_pago_mes == '08') { $cuarto_icono = 'fas fa-users';  }
if ($cuarto_pago_mes == '09') { $cuarto_icono = 'fas fa-language'; }
if ($cuarto_pago_mes == '10') { $cuarto_icono = 'fas fa-anchor';  }
if ($cuarto_pago_mes == '11') { $cuarto_icono = 'fas fa-music'; }
if ($cuarto_pago_mes == '12') { $cuarto_icono = 'fas fa-sleigh'; }

if ($quinto_pago_mes == '01') { $quinto_icono = 'fas fa-chess-king'; }
if ($quinto_pago_mes == '02') { $quinto_icono = 'fas fa-mask'; }
if ($quinto_pago_mes == '03') { $quinto_icono = 'fas fa-female'; }
if ($quinto_pago_mes == '04') { $quinto_icono = 'fas fa-church';  }
if ($quinto_pago_mes == '05') { $quinto_icono = 'fas fa-user-tie';  }
if ($quinto_pago_mes == '06') { $quinto_icono = 'fas fa-male'; }
if ($quinto_pago_mes == '07') { $quinto_icono = 'fas fa-child'; }
if ($quinto_pago_mes == '08') { $quinto_icono = 'fas fa-users';  }
if ($quinto_pago_mes == '09') { $quinto_icono = 'fas fa-language'; }
if ($quinto_pago_mes == '10') { $quinto_icono = 'fas fa-anchor';  }
if ($quinto_pago_mes == '11') { $quinto_icono = 'fas fa-music'; }
if ($quinto_pago_mes == '12') { $quinto_icono = 'fas fa-sleigh'; }

if ($sexto_pago_mes == '01') { $sexto_icono = 'fas fa-chess-king'; }
if ($sexto_pago_mes == '02') { $sexto_icono = 'fas fa-mask'; }
if ($sexto_pago_mes == '03') { $sexto_icono = 'fas fa-female'; }
if ($sexto_pago_mes == '04') { $sexto_icono = 'fas fa-church';  }
if ($sexto_pago_mes == '05') { $sexto_icono = 'fas fa-user-tie';  }
if ($sexto_pago_mes == '06') { $sexto_icono = 'fas fa-male'; }
if ($sexto_pago_mes == '07') { $sexto_icono = 'fas fa-child'; }
if ($sexto_pago_mes == '08') { $sexto_icono = 'fas fa-users';  }
if ($sexto_pago_mes == '09') { $sexto_icono = 'fas fa-language'; }
if ($sexto_pago_mes == '10') { $sexto_icono = 'fas fa-anchor';  }
if ($sexto_pago_mes == '11') { $sexto_icono = 'fas fa-music'; }
if ($sexto_pago_mes == '12') { $sexto_icono = 'fas fa-sleigh'; }

if ($septimo_pago_mes == '01') { $septimo_icono = 'fas fa-chess-king'; }
if ($septimo_pago_mes == '02') { $septimo_icono = 'fas fa-mask'; }
if ($septimo_pago_mes == '03') { $septimo_icono = 'fas fa-female'; }
if ($septimo_pago_mes == '04') { $septimo_icono = 'fas fa-church';  }
if ($septimo_pago_mes == '05') { $septimo_icono = 'fas fa-user-tie';  }
if ($septimo_pago_mes == '06') { $septimo_icono = 'fas fa-male'; }
if ($septimo_pago_mes == '07') { $septimo_icono = 'fas fa-child'; }
if ($septimo_pago_mes == '08') { $septimo_icono = 'fas fa-users';  }
if ($septimo_pago_mes == '09') { $septimo_icono = 'fas fa-language'; }
if ($septimo_pago_mes == '10') { $septimo_icono = 'fas fa-anchor';  }
if ($septimo_pago_mes == '11') { $septimo_icono = 'fas fa-music'; }
if ($septimo_pago_mes == '12') { $septimo_icono = 'fas fa-sleigh'; }

if ($octavo_pago_mes == '01') { $octavo_icono = 'fas fa-chess-king'; }
if ($octavo_pago_mes == '02') { $octavo_icono = 'fas fa-mask'; }
if ($octavo_pago_mes == '03') { $octavo_icono = 'fas fa-female'; }
if ($octavo_pago_mes == '04') { $octavo_icono = 'fas fa-church';  }
if ($octavo_pago_mes == '05') { $octavo_icono = 'fas fa-user-tie';  }
if ($octavo_pago_mes == '06') { $octavo_icono = 'fas fa-male'; }
if ($octavo_pago_mes == '07') { $octavo_icono = 'fas fa-child'; }
if ($octavo_pago_mes == '08') { $octavo_icono = 'fas fa-users';  }
if ($octavo_pago_mes == '09') { $octavo_icono = 'fas fa-language'; }
if ($octavo_pago_mes == '10') { $octavo_icono = 'fas fa-anchor';  }
if ($octavo_pago_mes == '11') { $octavo_icono = 'fas fa-music'; }
if ($octavo_pago_mes == '12') { $octavo_icono = 'fas fa-sleigh'; }

if ($noveno_pago_mes == '01') { $noveno_icono = 'fas fa-chess-king'; }
if ($noveno_pago_mes == '02') { $noveno_icono = 'fas fa-mask'; }
if ($noveno_pago_mes == '03') { $noveno_icono = 'fas fa-female'; }
if ($noveno_pago_mes == '04') { $noveno_icono = 'fas fa-church';  }
if ($noveno_pago_mes == '05') { $noveno_icono = 'fas fa-user-tie';  }
if ($noveno_pago_mes == '06') { $noveno_icono = 'fas fa-male'; }
if ($noveno_pago_mes == '07') { $noveno_icono = 'fas fa-child'; }
if ($noveno_pago_mes == '08') { $noveno_icono = 'fas fa-users';  }
if ($noveno_pago_mes == '09') { $noveno_icono = 'fas fa-language'; }
if ($noveno_pago_mes == '10') { $noveno_icono = 'fas fa-anchor';  }
if ($noveno_pago_mes == '11') { $noveno_icono = 'fas fa-music'; }
if ($noveno_pago_mes == '12') { $noveno_icono = 'fas fa-sleigh'; }

if ($decimo_pago_mes == '01') { $decimo_icono = 'fas fa-chess-king'; }
if ($decimo_pago_mes == '02') { $decimo_icono = 'fas fa-mask'; }
if ($decimo_pago_mes == '03') { $decimo_icono = 'fas fa-female'; }
if ($decimo_pago_mes == '04') { $decimo_icono = 'fas fa-church';  }
if ($decimo_pago_mes == '05') { $decimo_icono = 'fas fa-user-tie';  }
if ($decimo_pago_mes == '06') { $decimo_icono = 'fas fa-male'; }
if ($decimo_pago_mes == '07') { $decimo_icono = 'fas fa-child'; }
if ($decimo_pago_mes == '08') { $decimo_icono = 'fas fa-users';  }
if ($decimo_pago_mes == '09') { $decimo_icono = 'fas fa-language'; }
if ($decimo_pago_mes == '10') { $decimo_icono = 'fas fa-anchor';  }
if ($decimo_pago_mes == '11') { $decimo_icono = 'fas fa-music'; }
if ($decimo_pago_mes == '12') { $decimo_icono = 'fas fa-sleigh'; }

if ($onceavo_pago_mes == '01') { $onceavo_icono = 'fas fa-chess-king'; }
if ($onceavo_pago_mes == '02') { $onceavo_icono = 'fas fa-mask'; }
if ($onceavo_pago_mes == '03') { $onceavo_icono = 'fas fa-female'; }
if ($onceavo_pago_mes == '04') { $onceavo_icono = 'fas fa-church';  }
if ($onceavo_pago_mes == '05') { $onceavo_icono = 'fas fa-user-tie';  }
if ($onceavo_pago_mes == '06') { $onceavo_icono = 'fas fa-male'; }
if ($onceavo_pago_mes == '07') { $onceavo_icono = 'fas fa-child'; }
if ($onceavo_pago_mes == '08') { $onceavo_icono = 'fas fa-users';  }
if ($onceavo_pago_mes == '09') { $onceavo_icono = 'fas fa-language'; }
if ($onceavo_pago_mes == '10') { $onceavo_icono = 'fas fa-anchor';  }
if ($onceavo_pago_mes == '11') { $onceavo_icono = 'fas fa-music'; }
if ($onceavo_pago_mes == '12') { $onceavo_icono = 'fas fa-sleigh'; }

if ($doceavo_pago_mes == '01') { $doceavo_icono = 'fas fa-chess-king'; }
if ($doceavo_pago_mes == '02') { $doceavo_icono = 'fas fa-mask'; }
if ($doceavo_pago_mes == '03') { $doceavo_icono = 'fas fa-female'; }
if ($doceavo_pago_mes == '04') { $doceavo_icono = 'fas fa-church';  }
if ($doceavo_pago_mes == '05') { $doceavo_icono = 'fas fa-user-tie';  }
if ($doceavo_pago_mes == '06') { $doceavo_icono = 'fas fa-male'; }
if ($doceavo_pago_mes == '07') { $doceavo_icono = 'fas fa-child'; }
if ($doceavo_pago_mes == '08') { $doceavo_icono = 'fas fa-users';  }
if ($doceavo_pago_mes == '09') { $doceavo_icono = 'fas fa-language'; }
if ($doceavo_pago_mes == '10') { $doceavo_icono = 'fas fa-anchor';  }
if ($doceavo_pago_mes == '11') { $doceavo_icono = 'fas fa-music'; }
if ($doceavo_pago_mes == '12') { $doceavo_icono = 'fas fa-sleigh'; }

?>






<?php

include("../conectar.php");

$queryp_status = "SELECT * FROM temporada_escolar where id_periodo_es = '$id_del_periodo' LIMIT 1";

$datos_statusH = mysqli_query($enlace, $queryp_status) or die(mysqli_error());

$row_datos_statusH = mysqli_fetch_array($datos_statusH );

mysqli_close($enlace);

?>      






 <div class="row ml-1">



        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-moraoscuro o-hidden h-100">
            <div class="card-bodywwwaa">
<div class="cantidadzzzpe"><b>1° Mes:</b></div>
<div class="cantidadzzzpe"><?php echo $primer_pago; ?> - <?php echo $primer_pago_mes; ?> </div>
              <div class="mini_card_iconaa">
                <i class="<?php echo $primer_icono; ?>"></i>    
              </div>
<div class="cantidadzzzpe">&nbsp;</div>
              <div class="mt-3 cantidadzzzsmall">
<?php







$directory_01a = 'aaa_nominas/'.$este_es_el_periodo.'/'.$primer_pago_mes.'/a/';
$filecount_01a = 0;
$files_01a = glob($directory_01a . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_01a){
 $filecount_01a = count($files_01a);
}



$directory_01b = 'aaa_nominas/'.$este_es_el_periodo.'/'.$primer_pago_mes.'/b/';
$filecount_01b = 0;
$files_01b = glob($directory_01b . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_01b){
 $filecount_01b = count($files_01b);
}

$directory_01c = 'aaa_nominas/'.$este_es_el_periodo.'/'.$primer_pago_mes.'/c/';
$filecount_01c = 0;
$files_01c = glob($directory_01c . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_01c){
 $filecount_01c = count($files_01c);
}

$directory_01d = 'aaa_nominas/'.$este_es_el_periodo.'/'.$primer_pago_mes.'/d/';
$filecount_01d = 0;
$files_01d = glob($directory_01d . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_01d){
 $filecount_01d = count($files_01d);
}

?>

<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_01_a"  name="dir_mes_01_a" value="<?php echo $directory_01a; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $primer_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['01a']; ?>">
<button type="submit" name="mes_01_a" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_01a; ?> ">Explorar, <?php echo $row_datos_statusH['01a']; ?></button>  
</form>
</div>

<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_01_b"  name="dir_mes_01_b" value="<?php echo $directory_01b; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $primer_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['01b']; ?>">
<button type="submit" name="mes_01_b" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_01b; ?> ">Explorar, <?php echo $row_datos_statusH['01b']; ?></button>  
</form>
</div>


<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_01_c"  name="dir_mes_01_c" value="<?php echo $directory_01c; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $primer_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['01c']; ?>">
<button type="submit" name="mes_01_c" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_01c; ?> ">Explorar, <?php echo $row_datos_statusH['01c']; ?></button>  
</form>
</div>


<div class="">
<form method="POST">
<input type="hidden" id="dir_mes_01_d"  name="dir_mes_01_d" value="<?php echo $directory_01d; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $primer_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['01d']; ?>">
<button type="submit" name="mes_01_d" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_01d; ?> ">Explorar, <?php echo $row_datos_statusH['01d']; ?></button>  
</form>
</div>               
                            
              </div>

            </div>

          </div>
        </div>   <!-- cierre del card 01 -->



  <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-moraoscuro o-hidden h-100">
            <div class="card-bodywwwaa">
<div class="cantidadzzzpe"><b>2° Mes:</b></div>
<div class="cantidadzzzpe"><?php echo $segundo_pago; ?> - <?php echo $segundo_pago_mes; ?> </div>
              <div class="mini_card_iconaa">
                <i class="<?php echo $segundo_icono; ?>"></i>    
              </div>
<div class="cantidadzzzpe">&nbsp;</div>
              <div class="mt-3 cantidadzzzsmall">
<?php

$directory_02a = 'aaa_nominas/'.$este_es_el_periodo.'/'.$segundo_pago_mes.'/a/';
$filecount_02a = 0;
$files_02a = glob($directory_02a . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_02a){
 $filecount_02a = count($files_02a);
}

$directory_02b = 'aaa_nominas/'.$este_es_el_periodo.'/'.$segundo_pago_mes.'/b/';
$filecount_02b = 0;
$files_02b = glob($directory_02b . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_02b){
 $filecount_02b = count($files_02b);
}

$directory_02c = 'aaa_nominas/'.$este_es_el_periodo.'/'.$segundo_pago_mes.'/c/';
$filecount_02c = 0;
$files_02c = glob($directory_02c . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_02c){
 $filecount_02c = count($files_02c);
}

$directory_02d = 'aaa_nominas/'.$este_es_el_periodo.'/'.$segundo_pago_mes.'/d/';
$filecount_02d = 0;
$files_02d = glob($directory_02d . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_02d){
 $filecount_02d = count($files_02d);
}

?>

<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_02_a"  name="dir_mes_02_a" value="<?php echo $directory_02a; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $segundo_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['02a']; ?>">
<button type="submit" name="mes_02_a" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_02a; ?> ">Explorar, <?php echo $row_datos_statusH['02a']; ?></button>  
</form>
</div>

<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_02_b"  name="dir_mes_02_b" value="<?php echo $directory_02b; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $segundo_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['02b']; ?>">
<button type="submit" name="mes_02_b" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_02b; ?> ">Explorar, <?php echo $row_datos_statusH['02b']; ?></button>  
</form>
</div>


<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_02_c"  name="dir_mes_02_c" value="<?php echo $directory_02c; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $segundo_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['02c']; ?>">
<button type="submit" name="mes_02_c" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_02c; ?> ">Explorar, <?php echo $row_datos_statusH['02c']; ?></button>  
</form>
</div>


<div class="">
<form method="POST">
<input type="hidden" id="dir_mes_02_d"  name="dir_mes_02_d" value="<?php echo $directory_02d; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $segundo_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['02d']; ?>">
<button type="submit" name="mes_02_d" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_02d; ?> ">Explorar, <?php echo $row_datos_statusH['02d']; ?></button>  
</form>
</div>               
                            
              </div>

            </div>

          </div>
        </div>   <!-- cierre del card 02 -->



  <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-moraoscuro o-hidden h-100">
            <div class="card-bodywwwaa">
<div class="cantidadzzzpe"><b>3° Mes:</b></div>
<div class="cantidadzzzpe"><?php echo $tercero_pago; ?> - <?php echo $tercero_pago_mes; ?> </div>
              <div class="mini_card_iconaa">
                <i class="<?php echo $tercero_icono; ?>"></i>    
              </div>
<div class="cantidadzzzpe">&nbsp;</div>
              <div class="mt-3 cantidadzzzsmall">
<?php

$directory_03a = 'aaa_nominas/'.$este_es_el_periodo.'/'.$tercero_pago_mes.'/a/';
$filecount_03a = 0;
$files_03a = glob($directory_03a . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_03a){
 $filecount_03a = count($files_03a);
}

$directory_03b = 'aaa_nominas/'.$este_es_el_periodo.'/'.$tercero_pago_mes.'/b/';
$filecount_03b = 0;
$files_03b = glob($directory_03b . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_03b){
 $filecount_03b = count($files_03b);
}

$directory_03c = 'aaa_nominas/'.$este_es_el_periodo.'/'.$tercero_pago_mes.'/c/';
$filecount_03c = 0;
$files_03c = glob($directory_03c . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_03c){
 $filecount_03c = count($files_03c);
}

$directory_03d = 'aaa_nominas/'.$este_es_el_periodo.'/'.$tercero_pago_mes.'/d/';
$filecount_03d = 0;
$files_03d = glob($directory_03d . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_03d){
 $filecount_03d = count($files_03d);
}

?>

<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_03_a"  name="dir_mes_03_a" value="<?php echo $directory_03a; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $tercero_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['03a']; ?>">
<button type="submit" name="mes_03_a" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_03a; ?> ">Explorar, <?php echo $row_datos_statusH['03a']; ?></button>  
</form>
</div>

<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_03_b"  name="dir_mes_03_b" value="<?php echo $directory_03b; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $tercero_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['03b']; ?>">
<button type="submit" name="mes_03_b" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_03b; ?> ">Explorar, <?php echo $row_datos_statusH['03b']; ?></button>  
</form>
</div>


<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_03_c"  name="dir_mes_03_c" value="<?php echo $directory_03c; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $tercero_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['03c']; ?>">
<button type="submit" name="mes_03_c" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_03c; ?> ">Explorar, <?php echo $row_datos_statusH['03c']; ?></button>  
</form>
</div>


<div class="">
<form method="POST">
<input type="hidden" id="dir_mes_03_d"  name="dir_mes_03_d" value="<?php echo $directory_03d; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $tercero_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['03d']; ?>">
<button type="submit" name="mes_03_d" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_03d; ?> ">Explorar, <?php echo $row_datos_statusH['03d']; ?></button>  
</form>
</div>               
                            
              </div>

            </div>

          </div>
        </div>   <!-- cierre del card 03 -->



  <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-moraoscuro o-hidden h-100">
            <div class="card-bodywwwaa">
<div class="cantidadzzzpe"><b>4° Mes:</b></div>
<div class="cantidadzzzpe"><?php echo $cuarto_pago; ?> - <?php echo $cuarto_pago_mes; ?> </div>
              <div class="mini_card_iconaa">
                <i class="<?php echo $cuarto_icono; ?>"></i>    
              </div>
<div class="cantidadzzzpe">&nbsp;</div>
              <div class="mt-3 cantidadzzzsmall">
<?php

$directory_04a = 'aaa_nominas/'.$este_es_el_periodo.'/'.$cuarto_pago_mes.'/a/';
$filecount_04a = 0;
$files_04a = glob($directory_04a . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_04a){
 $filecount_04a = count($files_04a);
}

$directory_04b = 'aaa_nominas/'.$este_es_el_periodo.'/'.$cuarto_pago_mes.'/b/';
$filecount_04b = 0;
$files_04b = glob($directory_04b . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_04b){
 $filecount_04b = count($files_04b);
}

$directory_04c = 'aaa_nominas/'.$este_es_el_periodo.'/'.$cuarto_pago_mes.'/c/';
$filecount_04c = 0;
$files_04c = glob($directory_04c . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_04c){
 $filecount_04c = count($files_04c);
}

$directory_04d = 'aaa_nominas/'.$este_es_el_periodo.'/'.$cuarto_pago_mes.'/d/';
$filecount_04d = 0;
$files_04d = glob($directory_04d . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_04d){
 $filecount_04d = count($files_04d);
}

?>

<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_04_a"  name="dir_mes_04_a" value="<?php echo $directory_04a; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $cuarto_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['04a']; ?>">
<button type="submit" name="mes_04_a" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_04a; ?> ">Explorar, <?php echo $row_datos_statusH['04a']; ?></button>  
</form>
</div>

<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_04_b"  name="dir_mes_04_b" value="<?php echo $directory_04b; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $cuarto_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['04b']; ?>">
<button type="submit" name="mes_04_b" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_04b; ?> ">Explorar, <?php echo $row_datos_statusH['04b']; ?></button>  
</form>
</div>


<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_04_c"  name="dir_mes_04_c" value="<?php echo $directory_04c; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $cuarto_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['04c']; ?>">
<button type="submit" name="mes_04_c" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_04c; ?> ">Explorar, <?php echo $row_datos_statusH['04c']; ?></button>  
</form>
</div>


<div class="">
<form method="POST">
<input type="hidden" id="dir_mes_04_d"  name="dir_mes_04_d" value="<?php echo $directory_04d; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $cuarto_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['04d']; ?>">
<button type="submit" name="mes_04_d" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_04d; ?> ">Explorar, <?php echo $row_datos_statusH['04d']; ?></button>  
</form>
</div>               
                            
              </div>

            </div>

          </div>
        </div>   <!-- cierre del card 04 -->



</div>  <!-- cierre row -->



 <div class="row ml-1">



  <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-bodywwwaa">
<div class="cantidadzzzpe"><b>5° Mes:</b></div>
<div class="cantidadzzzpe"><?php echo $quinto_pago; ?> - <?php echo $quinto_pago_mes; ?> </div>
              <div class="mini_card_iconaa">
                <i class="<?php echo $quinto_icono; ?>"></i>    
              </div>
<div class="cantidadzzzpe">&nbsp;</div>
              <div class="mt-3 cantidadzzzsmall">
<?php

$directory_05a = 'aaa_nominas/'.$este_es_el_periodo.'/'.$quinto_pago_mes.'/a/';
$filecount_05a = 0;
$files_05a = glob($directory_05a . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_05a){
 $filecount_05a = count($files_05a);
}

$directory_05b = 'aaa_nominas/'.$este_es_el_periodo.'/'.$quinto_pago_mes.'/b/';
$filecount_05b = 0;
$files_05b = glob($directory_05b . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_05b){
 $filecount_05b = count($files_05b);
}

$directory_05c = 'aaa_nominas/'.$este_es_el_periodo.'/'.$quinto_pago_mes.'/c/';
$filecount_05c = 0;
$files_05c = glob($directory_05c . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_05c){
 $filecount_05c = count($files_05c);
}

$directory_05d = 'aaa_nominas/'.$este_es_el_periodo.'/'.$quinto_pago_mes.'/d/';
$filecount_05d = 0;
$files_05d = glob($directory_05d . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_05d){
 $filecount_05d = count($files_05d);
}

?>

<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_05_a"  name="dir_mes_05_a" value="<?php echo $directory_05a; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $quinto_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['05a']; ?>">
<button type="submit" name="mes_05_a" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_05a; ?> ">Explorar, <?php echo $row_datos_statusH['05a']; ?></button>  
</form>
</div>

<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_05_b"  name="dir_mes_05_b" value="<?php echo $directory_05b; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $quinto_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['05b']; ?>">
<button type="submit" name="mes_05_b" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_05b; ?> ">Explorar, <?php echo $row_datos_statusH['05b']; ?></button>  
</form>
</div>


<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_05_c"  name="dir_mes_05_c" value="<?php echo $directory_05c; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $quinto_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['05c']; ?>">
<button type="submit" name="mes_05_c" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_05c; ?> ">Explorar, <?php echo $row_datos_statusH['05c']; ?></button>  
</form>
</div>


<div class="">
<form method="POST">
<input type="hidden" id="dir_mes_05_d"  name="dir_mes_05_d" value="<?php echo $directory_05d; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $quinto_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['05d']; ?>">
<button type="submit" name="mes_05_d" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_05d; ?> ">Explorar, <?php echo $row_datos_statusH['05d']; ?></button>  
</form>
</div>               
                            
              </div>

            </div>

          </div>
        </div>   <!-- cierre del card 05 -->




  <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-bodywwwaa">
<div class="cantidadzzzpe"><b>6° Mes:</b></div>
<div class="cantidadzzzpe"><?php echo $sexto_pago; ?> - <?php echo $sexto_pago_mes; ?> </div>
              <div class="mini_card_iconaa">
                <i class="<?php echo $sexto_icono; ?>"></i>    
              </div>
<div class="cantidadzzzpe">&nbsp;</div>
              <div class="mt-3 cantidadzzzsmall">
<?php

$directory_06a = 'aaa_nominas/'.$este_es_el_periodo.'/'.$sexto_pago_mes.'/a/';
$filecount_06a = 0;
$files_06a = glob($directory_06a . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_06a){
 $filecount_06a = count($files_06a);
}

$directory_06b = 'aaa_nominas/'.$este_es_el_periodo.'/'.$sexto_pago_mes.'/b/';
$filecount_06b = 0;
$files_06b = glob($directory_06b . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_06b){
 $filecount_06b = count($files_06b);
}

$directory_06c = 'aaa_nominas/'.$este_es_el_periodo.'/'.$sexto_pago_mes.'/c/';
$filecount_06c = 0;
$files_06c = glob($directory_06c . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_06c){
 $filecount_06c = count($files_06c);
}

$directory_06d = 'aaa_nominas/'.$este_es_el_periodo.'/'.$sexto_pago_mes.'/d/';
$filecount_06d = 0;
$files_06d = glob($directory_06d . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_06d){
 $filecount_06d = count($files_06d);
}

?>

<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_06_a"  name="dir_mes_06_a" value="<?php echo $directory_06a; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $sexto_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['06a']; ?>">
<button type="submit" name="mes_06_a" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_06a; ?> ">Explorar, <?php echo $row_datos_statusH['06a']; ?></button>  
</form>
</div>

<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_06_b"  name="dir_mes_06_b" value="<?php echo $directory_06b; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $sexto_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['06b']; ?>">
<button type="submit" name="mes_06_b" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_06b; ?> ">Explorar, <?php echo $row_datos_statusH['06b']; ?></button>  
</form>
</div>


<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_06_c"  name="dir_mes_06_c" value="<?php echo $directory_06c; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $sexto_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['06c']; ?>">
<button type="submit" name="mes_06_c" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_06c; ?> ">Explorar, <?php echo $row_datos_statusH['06c']; ?></button>  
</form>
</div>


<div class="">
<form method="POST">
<input type="hidden" id="dir_mes_06_d"  name="dir_mes_06_d" value="<?php echo $directory_06d; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $sexto_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['06d']; ?>">
<button type="submit" name="mes_06_d" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_06d; ?> ">Explorar, <?php echo $row_datos_statusH['06d']; ?></button>  
</form>
</div>               
                            
              </div>

            </div>

          </div>
        </div>   <!-- cierre del card 06 -->


  

  <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-bodywwwaa">
<div class="cantidadzzzpe"><b>7° Mes:</b></div>
<div class="cantidadzzzpe"><?php echo $septimo_pago; ?> - <?php echo $septimo_pago_mes; ?> </div>
              <div class="mini_card_iconaa">
                <i class="<?php echo $septimo_icono; ?>"></i>    
              </div>
<div class="cantidadzzzpe">&nbsp;</div>
              <div class="mt-3 cantidadzzzsmall">
<?php

$directory_07a = 'aaa_nominas/'.$este_es_el_periodo.'/'.$septimo_pago_mes.'/a/';
$filecount_07a = 0;
$files_07a = glob($directory_07a . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_07a){
 $filecount_07a = count($files_07a);
}

$directory_07b = 'aaa_nominas/'.$este_es_el_periodo.'/'.$septimo_pago_mes.'/b/';
$filecount_07b = 0;
$files_07b = glob($directory_07b . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_07b){
 $filecount_07b = count($files_07b);
}

$directory_07c = 'aaa_nominas/'.$este_es_el_periodo.'/'.$septimo_pago_mes.'/c/';
$filecount_07c = 0;
$files_07c = glob($directory_07c . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_07c){
 $filecount_07c = count($files_07c);
}

$directory_07d = 'aaa_nominas/'.$este_es_el_periodo.'/'.$septimo_pago_mes.'/d/';
$filecount_07d = 0;
$files_07d = glob($directory_07d . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_07d){
 $filecount_07d = count($files_07d);
}

?>

<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_07_a"  name="dir_mes_07_a" value="<?php echo $directory_07a; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $septimo_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['07a']; ?>">
<button type="submit" name="mes_07_a" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_07a; ?> ">Explorar, <?php echo $row_datos_statusH['07a']; ?></button>  
</form>
</div>

<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_07_b"  name="dir_mes_07_b" value="<?php echo $directory_07b; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $septimo_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['07b']; ?>">
<button type="submit" name="mes_07_b" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_07b; ?> ">Explorar, <?php echo $row_datos_statusH['07b']; ?></button>  
</form>
</div>


<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_07_c"  name="dir_mes_07_c" value="<?php echo $directory_07c; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $septimo_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['07c']; ?>">
<button type="submit" name="mes_07_c" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_07c; ?> ">Explorar, <?php echo $row_datos_statusH['07c']; ?></button>  
</form>
</div>


<div class="">
<form method="POST">
<input type="hidden" id="dir_mes_07_d"  name="dir_mes_07_d" value="<?php echo $directory_07d; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $septimo_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['07d']; ?>">
<button type="submit" name="mes_07_d" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_07d; ?> ">Explorar, <?php echo $row_datos_statusH['07d']; ?></button>  
</form>
</div>               
                            
              </div>

            </div>

          </div>
        </div>   <!-- cierre del card 07 -->



  <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-browplight o-hidden h-100">
            <div class="card-bodywwwaa">
<div class="cantidadzzzpe"><b>8° Mes:</b></div>
<div class="cantidadzzzpe"><?php echo $octavo_pago; ?> - <?php echo $octavo_pago_mes; ?> </div>
              <div class="mini_card_iconaa">
                <i class="<?php echo $octavo_icono; ?>"></i>    
              </div>
<div class="cantidadzzzpe">&nbsp;</div>
              <div class="mt-3 cantidadzzzsmall">
<?php

$directory_08a = 'aaa_nominas/'.$este_es_el_periodo.'/'.$octavo_pago_mes.'/a/';
$filecount_08a = 0;
$files_08a = glob($directory_08a . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_08a){
 $filecount_08a = count($files_08a);
}

$directory_08b = 'aaa_nominas/'.$este_es_el_periodo.'/'.$octavo_pago_mes.'/b/';
$filecount_08b = 0;
$files_08b = glob($directory_08b . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_08b){
 $filecount_08b = count($files_08b);
}

$directory_08c = 'aaa_nominas/'.$este_es_el_periodo.'/'.$octavo_pago_mes.'/c/';
$filecount_08c = 0;
$files_08c = glob($directory_08c . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_08c){
 $filecount_08c = count($files_08c);
}

$directory_08d = 'aaa_nominas/'.$este_es_el_periodo.'/'.$octavo_pago_mes.'/d/';
$filecount_08d = 0;
$files_08d = glob($directory_08d . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_08d){
 $filecount_08d = count($files_08d);
}

?>

<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_08_a"  name="dir_mes_08_a" value="<?php echo $directory_08a; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $octavo_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['08a']; ?>">
<button type="submit" name="mes_08_a" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_08a; ?> ">Explorar, <?php echo $row_datos_statusH['08a']; ?></button>  
</form>
</div>

<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_08_b"  name="dir_mes_08_b" value="<?php echo $directory_08b; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $octavo_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['08b']; ?>">
<button type="submit" name="mes_08_b" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_08b; ?> ">Explorar, <?php echo $row_datos_statusH['08b']; ?></button>  
</form>
</div>


<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_08_c"  name="dir_mes_08_c" value="<?php echo $directory_08c; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $octavo_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['08c']; ?>">
<button type="submit" name="mes_08_c" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_08c; ?> ">Explorar, <?php echo $row_datos_statusH['08c']; ?></button>  
</form>
</div>


<div class="">
<form method="POST">
<input type="hidden" id="dir_mes_08_d"  name="dir_mes_08_d" value="<?php echo $directory_08d; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $octavo_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['08d']; ?>">
<button type="submit" name="mes_08_d" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_08d; ?> ">Explorar, <?php echo $row_datos_statusH['08d']; ?></button>  
</form>
</div>               
                            
              </div>

            </div>

          </div>
        </div>   <!-- cierre del card 08 -->



</div>  <!-- cierre row 2 -->



 <div class="row ml-1">


  <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-indigo o-hidden h-100">
            <div class="card-bodywwwaa">
<div class="cantidadzzzpe"><b>9° Mes:</b></div>
<div class="cantidadzzzpe"><?php echo $noveno_pago; ?> - <?php echo $noveno_pago_mes; ?> </div>
              <div class="mini_card_iconaa">
                <i class="<?php echo $noveno_icono; ?>"></i>    
              </div>
<div class="cantidadzzzpe">&nbsp;</div>
              <div class="mt-3 cantidadzzzsmall">
<?php

$directory_09a = 'aaa_nominas/'.$este_es_el_periodo.'/'.$noveno_pago_mes.'/a/';
$filecount_09a = 0;
$files_09a = glob($directory_09a . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_09a){
 $filecount_09a = count($files_09a);
}

$directory_09b = 'aaa_nominas/'.$este_es_el_periodo.'/'.$noveno_pago_mes.'/b/';
$filecount_09b = 0;
$files_09b = glob($directory_09b . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_09b){
 $filecount_09b = count($files_09b);
}

$directory_09c = 'aaa_nominas/'.$este_es_el_periodo.'/'.$noveno_pago_mes.'/c/';
$filecount_09c = 0;
$files_09c = glob($directory_09c . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_09c){
 $filecount_09c = count($files_09c);
}

$directory_09d = 'aaa_nominas/'.$este_es_el_periodo.'/'.$noveno_pago_mes.'/d/';
$filecount_09d = 0;
$files_09d = glob($directory_09d . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_09d){
 $filecount_09d = count($files_09d);
}

?>

<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_09_a"  name="dir_mes_09_a" value="<?php echo $directory_09a; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $noveno_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['09a']; ?>">
<button type="submit" name="mes_09_a" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_09a; ?> ">Explorar, <?php echo $row_datos_statusH['09a']; ?></button>  
</form>
</div>

<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_09_b"  name="dir_mes_09_b" value="<?php echo $directory_09b; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $noveno_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['09b']; ?>">
<button type="submit" name="mes_09_b" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_09b; ?> ">Explorar, <?php echo $row_datos_statusH['09b']; ?></button>  
</form>
</div>


<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_09_c"  name="dir_mes_09_c" value="<?php echo $directory_09c; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $noveno_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['09c']; ?>">
<button type="submit" name="mes_09_c" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_09c; ?> ">Explorar, <?php echo $row_datos_statusH['09c']; ?></button>  
</form>
</div>


<div class="">
<form method="POST">
<input type="hidden" id="dir_mes_09_d"  name="dir_mes_09_d" value="<?php echo $directory_09d; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $noveno_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['09d']; ?>">
<button type="submit" name="mes_09_d" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_09d; ?> ">Explorar, <?php echo $row_datos_statusH['09d']; ?></button>  
</form>
</div>               
                            
              </div>

            </div>

          </div>
        </div>   <!-- cierre del card 09 -->





  <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-indigo o-hidden h-100">
            <div class="card-bodywwwaa">
<div class="cantidadzzzpe"><b>10° Mes:</b></div>
<div class="cantidadzzzpe"><?php echo $decimo_pago; ?> - <?php echo $decimo_pago_mes; ?> </div>
              <div class="mini_card_iconaa">
                <i class="<?php echo $decimo_icono; ?>"></i>    
              </div>
<div class="cantidadzzzpe">&nbsp;</div>
              <div class="mt-3 cantidadzzzsmall">
<?php

$directory_10a = 'aaa_nominas/'.$este_es_el_periodo.'/'.$decimo_pago_mes.'/a/';
$filecount_10a = 0;
$files_10a = glob($directory_10a . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_10a){
 $filecount_10a = count($files_10a);
}

$directory_10b = 'aaa_nominas/'.$este_es_el_periodo.'/'.$decimo_pago_mes.'/b/';
$filecount_10b = 0;
$files_10b = glob($directory_10b . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_10b){
 $filecount_10b = count($files_10b);
}

$directory_10c = 'aaa_nominas/'.$este_es_el_periodo.'/'.$decimo_pago_mes.'/c/';
$filecount_10c = 0;
$files_10c = glob($directory_10c . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_10c){
 $filecount_10c = count($files_10c);
}

$directory_10d = 'aaa_nominas/'.$este_es_el_periodo.'/'.$decimo_pago_mes.'/d/';
$filecount_10d = 0;
$files_10d = glob($directory_10d . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_10d){
 $filecount_10d = count($files_10d);
}

?>

<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_10_a"  name="dir_mes_10_a" value="<?php echo $directory_10a; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $decimo_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['10a']; ?>">
<button type="submit" name="mes_10_a" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_10a; ?> ">Explorar, <?php echo $row_datos_statusH['10a']; ?></button>  
</form>
</div>

<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_10_b"  name="dir_mes_10_b" value="<?php echo $directory_10b; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $decimo_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['10b']; ?>">
<button type="submit" name="mes_10_b" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_10b; ?> ">Explorar, <?php echo $row_datos_statusH['10b']; ?></button>  
</form>
</div>


<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_10_c"  name="dir_mes_10_c" value="<?php echo $directory_10c; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $decimo_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['10c']; ?>">
<button type="submit" name="mes_10_c" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_10c; ?> ">Explorar, <?php echo $row_datos_statusH['10c']; ?></button>  
</form>
</div>


<div class="">
<form method="POST">
<input type="hidden" id="dir_mes_10_d"  name="dir_mes_10_d" value="<?php echo $directory_10d; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $decimo_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['10d']; ?>">
<button type="submit" name="mes_10_d" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_10d; ?> ">Explorar, <?php echo $row_datos_statusH['10d']; ?></button>  
</form>
</div>               
                            
              </div>

            </div>

          </div>
        </div>   <!-- cierre del card 10 -->




  <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-indigo o-hidden h-110">
            <div class="card-bodywwwaa">
<div class="cantidadzzzpe"><b>11° Mes:</b></div>
<div class="cantidadzzzpe"><?php echo $onceavo_pago; ?> - <?php echo $onceavo_pago_mes; ?> </div>
              <div class="mini_card_iconaa">
                <i class="<?php echo $onceavo_icono; ?>"></i>    
              </div>
<div class="cantidadzzzpe">&nbsp;</div>
              <div class="mt-3 cantidadzzzsmall">
<?php

$directory_11a = 'aaa_nominas/'.$este_es_el_periodo.'/'.$onceavo_pago_mes.'/a/';
$filecount_11a = 0;
$files_11a = glob($directory_11a . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_11a){
 $filecount_11a = count($files_11a);
}

$directory_11b = 'aaa_nominas/'.$este_es_el_periodo.'/'.$onceavo_pago_mes.'/b/';
$filecount_11b = 0;
$files_11b = glob($directory_11b . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_11b){
 $filecount_11b = count($files_11b);
}

$directory_11c = 'aaa_nominas/'.$este_es_el_periodo.'/'.$onceavo_pago_mes.'/c/';
$filecount_11c = 0;
$files_11c = glob($directory_11c . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_11c){
 $filecount_11c = count($files_11c);
}

$directory_11d = 'aaa_nominas/'.$este_es_el_periodo.'/'.$onceavo_pago_mes.'/d/';
$filecount_11d = 0;
$files_11d = glob($directory_11d . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_11d){
 $filecount_11d = count($files_11d);
}

?>

<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_11_a"  name="dir_mes_11_a" value="<?php echo $directory_11a; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $onceavo_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['11a']; ?>">
<button type="submit" name="mes_11_a" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_11a; ?> ">Explorar, <?php echo $row_datos_statusH['11a']; ?></button>  
</form>
</div>

<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_11_b"  name="dir_mes_11_b" value="<?php echo $directory_11b; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $onceavo_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['11b']; ?>">
<button type="submit" name="mes_11_b" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_11b; ?> ">Explorar, <?php echo $row_datos_statusH['11b']; ?></button>  
</form>
</div>


<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_11_c"  name="dir_mes_11_c" value="<?php echo $directory_11c; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $onceavo_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['11c']; ?>">
<button type="submit" name="mes_11_c" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_11c; ?> ">Explorar, <?php echo $row_datos_statusH['11c']; ?></button>  
</form>
</div>


<div class="">
<form method="POST">
<input type="hidden" id="dir_mes_11_d"  name="dir_mes_11_d" value="<?php echo $directory_11d; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $onceavo_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['11d']; ?>">
<button type="submit" name="mes_11_d" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_11d; ?> ">Explorar, <?php echo $row_datos_statusH['11d']; ?></button>  
</form>
</div>               
                            
              </div>

            </div>

          </div>
        </div>   <!-- cierre del card 11 -->





        
  <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white relleno-indigo o-hidden h-120">
            <div class="card-bodywwwaa">
<div class="cantidadzzzpe"><b>12° Mes:</b></div>
<div class="cantidadzzzpe"><?php echo $doceavo_pago; ?> - <?php echo $doceavo_pago_mes; ?> </div>
              <div class="mini_card_iconaa">
                <i class="<?php echo $doceavo_icono; ?>"></i>    
              </div>
<div class="cantidadzzzpe">&nbsp;</div>
              <div class="mt-3 cantidadzzzsmall">
<?php

$directory_12a = 'aaa_nominas/'.$este_es_el_periodo.'/'.$doceavo_pago_mes.'/a/';
$filecount_12a = 0;
$files_12a = glob($directory_12a . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_12a){
 $filecount_12a = count($files_12a);
}

$directory_12b = 'aaa_nominas/'.$este_es_el_periodo.'/'.$doceavo_pago_mes.'/b/';
$filecount_12b = 0;
$files_12b = glob($directory_12b . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_12b){
 $filecount_12b = count($files_12b);
}

$directory_12c = 'aaa_nominas/'.$este_es_el_periodo.'/'.$doceavo_pago_mes.'/c/';
$filecount_12c = 0;
$files_12c = glob($directory_12c . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_12c){
 $filecount_12c = count($files_12c);
}

$directory_12d = 'aaa_nominas/'.$este_es_el_periodo.'/'.$doceavo_pago_mes.'/d/';
$filecount_12d = 0;
$files_12d = glob($directory_12d . "*.{PDF,pdf}",GLOB_BRACE);
if ($files_12d){
 $filecount_12d = count($files_12d);
}

?>

<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_12_a"  name="dir_mes_12_a" value="<?php echo $directory_12a; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $doceavo_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['12a']; ?>">
<button type="submit" name="mes_12_a" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_12a; ?> ">Explorar, <?php echo $row_datos_statusH['12a']; ?></button>  
</form>
</div>

<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_12_b"  name="dir_mes_12_b" value="<?php echo $directory_12b; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $doceavo_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['12b']; ?>">
<button type="submit" name="mes_12_b" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_12b; ?> ">Explorar, <?php echo $row_datos_statusH['12b']; ?></button>  
</form>
</div>


<div class="mb-2">
<form method="POST">
<input type="hidden" id="dir_mes_12_c"  name="dir_mes_12_c" value="<?php echo $directory_12c; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $doceavo_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['12c']; ?>">
<button type="submit" name="mes_12_c" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_12c; ?> ">Explorar, <?php echo $row_datos_statusH['12c']; ?></button>  
</form>
</div>


<div class="">
<form method="POST">
<input type="hidden" id="dir_mes_12_d"  name="dir_mes_12_d" value="<?php echo $directory_12d; ?>">
<input type="hidden" id="dir_periodo"  name="dir_periodo"   value="<?php echo $este_es_el_periodo; ?>">
<input type="hidden" id="dir_mes"      name="dir_mes"       value="<?php echo $doceavo_pago_mes; ?>">
<input type="hidden" id="dir_mes_atributo"  name="dir_mes_atributo"   value="<?php echo $row_datos_statusH['12d']; ?>">
<button type="submit" name="mes_12_d" class="btn btn-light btn-sm"
data-toggle="tooltip" data-placement="top" title="Archivos en la Carpeta: <?php echo $filecount_12d; ?> ">Explorar, <?php echo $row_datos_statusH['12d']; ?></button>  
</form>
</div>               
                            
              </div>

            </div>

          </div>
        </div>   <!-- cierre del card 12 -->



 </div>  <!-- cierre row 3 -->





<h4 class="glowwhite ml-3 mt-2 mb-3">Indicadores:</h4> 








<form method="POST">

 <div class="form-row ml-3">

 <div class="input-group col-md-5 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>1° Mes: <?php echo $primer_pago; ?> - <?php echo $primer_pago_mes; ?>; Corte A.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="primer_01a_atributo" name="primer_01a_atributo" value="<?php echo $row_datos_statusH['01a']; ?>" placeholder="Primer Corte" >

</div>


 <div class="input-group col-md-3 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>Corte B.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="primer_01b_atributo" name="primer_01b_atributo" value="<?php echo $row_datos_statusH['01b']; ?>" placeholder="Segundo Corte" >

</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>C.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="primer_01c_atributo" name="primer_01c_atributo" value="<?php echo $row_datos_statusH['01c']; ?>" placeholder="Tercer Corte" >

</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>D.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="primer_01d_atributo" name="primer_01d_atributo" value="<?php echo $row_datos_statusH['01d']; ?>" placeholder="Cuarto Corte" >

</div>

</div>






 <div class="form-row ml-3">

 <div class="input-group col-md-5 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>2° Mes: <?php echo $segundo_pago; ?> - <?php echo $segundo_pago_mes; ?>; Corte A.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="segundo_02a_atributo" name="segundo_02a_atributo" value="<?php echo $row_datos_statusH['02a']; ?>" placeholder="Primer Corte" >

</div>


 <div class="input-group col-md-3 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>Corte B.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="segundo_02b_atributo" name="segundo_02b_atributo" value="<?php echo $row_datos_statusH['02b']; ?>" placeholder="Segundo Corte" >

</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>C.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="segundo_02c_atributo" name="segundo_02c_atributo" value="<?php echo $row_datos_statusH['02c']; ?>" placeholder="Tercer Corte" >

</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>D.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="segundo_02d_atributo" name="segundo_02d_atributo" value="<?php echo $row_datos_statusH['02d']; ?>" placeholder="Cuarto Corte" >

</div>

</div>





 <div class="form-row ml-3">

 <div class="input-group col-md-5 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>3° Mes: <?php echo $tercero_pago; ?> - <?php echo $tercero_pago_mes; ?>; Corte A.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="tercer_03a_atributo" name="tercer_03a_atributo" value="<?php echo $row_datos_statusH['03a']; ?>" placeholder="Primer Corte" >

</div>


 <div class="input-group col-md-3 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>Corte B.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="tercer_03b_atributo" name="tercer_03b_atributo" value="<?php echo $row_datos_statusH['03b']; ?>" placeholder="Segundo Corte" >

</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>C.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="tercer_03c_atributo" name="tercer_03c_atributo" value="<?php echo $row_datos_statusH['03c']; ?>" placeholder="Tercer Corte" >

</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>D.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="tercer_03d_atributo" name="tercer_03d_atributo" value="<?php echo $row_datos_statusH['03d']; ?>" placeholder="Cuarto Corte" >

</div>

</div>




 <div class="form-row ml-3">

 <div class="input-group col-md-5 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>4° Mes: <?php echo $cuarto_pago; ?> - <?php echo $cuarto_pago_mes; ?>; Corte A.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="cuarto_04a_atributo" name="cuarto_04a_atributo" value="<?php echo $row_datos_statusH['04a']; ?>" placeholder="Primer Corte" >

</div>


 <div class="input-group col-md-3 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>Corte B.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="cuarto_04b_atributo" name="cuarto_04b_atributo" value="<?php echo $row_datos_statusH['04b']; ?>" placeholder="Segundo Corte" >

</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>C.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="cuarto_04c_atributo" name="cuarto_04c_atributo" value="<?php echo $row_datos_statusH['04c']; ?>" placeholder="Tercer Corte" >

</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-success" id="basic-addon1"><i><b>D.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="cuarto_04d_atributo" name="cuarto_04d_atributo" value="<?php echo $row_datos_statusH['04d']; ?>" placeholder="Cuarto Corte" >

</div>

</div>






 <div class="form-row ml-3">

 <div class="input-group col-md-5 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-primary" id="basic-addon1"><i><b>5° Mes: <?php echo $quinto_pago; ?> - <?php echo $quinto_pago_mes; ?>; Corte A.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="quinto_05a_atributo" name="quinto_05a_atributo" value="<?php echo $row_datos_statusH['05a']; ?>" placeholder="Primer Corte" >

</div>


 <div class="input-group col-md-3 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-primary" id="basic-addon1"><i><b>Corte B.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="quinto_05b_atributo" name="quinto_05b_atributo" value="<?php echo $row_datos_statusH['05b']; ?>" placeholder="Segundo Corte" >

</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-primary" id="basic-addon1"><i><b>C.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="quinto_05c_atributo" name="quinto_05c_atributo" value="<?php echo $row_datos_statusH['05c']; ?>" placeholder="Tercer Corte" >

</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-primary" id="basic-addon1"><i><b>D.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="quinto_05d_atributo" name="quinto_05d_atributo" value="<?php echo $row_datos_statusH['05d']; ?>" placeholder="Cuarto Corte" >

</div>

</div>




 <div class="form-row ml-3">

 <div class="input-group col-md-5 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-primary" id="basic-addon1"><i><b>6° Mes: <?php echo $sexto_pago; ?> - <?php echo $sexto_pago_mes; ?>; Corte A.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="sexto_06a_atributo" name="sexto_06a_atributo" value="<?php echo $row_datos_statusH['06a']; ?>" placeholder="Primer Corte" >

</div>


 <div class="input-group col-md-3 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-primary" id="basic-addon1"><i><b>Corte B.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="sexto_06b_atributo" name="sexto_06b_atributo" value="<?php echo $row_datos_statusH['06b']; ?>" placeholder="Segundo Corte" >

</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-primary" id="basic-addon1"><i><b>C.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="sexto_06c_atributo" name="sexto_06c_atributo" value="<?php echo $row_datos_statusH['06c']; ?>" placeholder="Tercer Corte" >

</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-primary" id="basic-addon1"><i><b>D.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="sexto_06d_atributo" name="sexto_06d_atributo" value="<?php echo $row_datos_statusH['06d']; ?>" placeholder="Cuarto Corte" >

</div>

</div>



 <div class="form-row ml-3">

 <div class="input-group col-md-5 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-primary" id="basic-addon1"><i><b>7° Mes: <?php echo $septimo_pago; ?> - <?php echo $septimo_pago_mes; ?>; Corte A.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="septimo_07a_atributo" name="septimo_07a_atributo" value="<?php echo $row_datos_statusH['07a']; ?>" placeholder="Primer Corte" >

</div>


 <div class="input-group col-md-3 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-primary" id="basic-addon1"><i><b>Corte B.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="septimo_07b_atributo" name="septimo_07b_atributo" value="<?php echo $row_datos_statusH['07b']; ?>" placeholder="Segundo Corte" >

</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-primary" id="basic-addon1"><i><b>C.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="septimo_07c_atributo" name="septimo_07c_atributo" value="<?php echo $row_datos_statusH['07c']; ?>" placeholder="Tercer Corte" >

</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-primary" id="basic-addon1"><i><b>D.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="septimo_07d_atributo" name="septimo_07d_atributo" value="<?php echo $row_datos_statusH['07d']; ?>" placeholder="Cuarto Corte" >

</div>

</div>




 <div class="form-row ml-3">

 <div class="input-group col-md-5 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-primary" id="basic-addon1"><i><b>8° Mes: <?php echo $octavo_pago; ?> - <?php echo $octavo_pago_mes; ?>; Corte A.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="octavo_08a_atributo" name="octavo_08a_atributo" value="<?php echo $row_datos_statusH['08a']; ?>" placeholder="Primer Corte" >

</div>


 <div class="input-group col-md-3 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-primary" id="basic-addon1"><i><b>Corte B.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="octavo_08b_atributo" name="octavo_08b_atributo" value="<?php echo $row_datos_statusH['08b']; ?>" placeholder="Segundo Corte" >

</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-primary" id="basic-addon1"><i><b>C.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="octavo_08c_atributo" name="octavo_08c_atributo" value="<?php echo $row_datos_statusH['08c']; ?>" placeholder="Tercer Corte" >

</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-primary" id="basic-addon1"><i><b>D.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="octavo_08d_atributo" name="octavo_08d_atributo" value="<?php echo $row_datos_statusH['08d']; ?>" placeholder="Cuarto Corte" >

</div>

</div>





 <div class="form-row ml-3">

 <div class="input-group col-md-5 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning" id="basic-addon1"><i><b>9° Mes: <?php echo $noveno_pago; ?> - <?php echo $noveno_pago_mes; ?>; Corte A.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="noveno_09a_atributo" name="noveno_09a_atributo" value="<?php echo $row_datos_statusH['09a']; ?>" placeholder="Primer Corte" >

</div>


 <div class="input-group col-md-3 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning" id="basic-addon1"><i><b>Corte B.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="noveno_09b_atributo" name="noveno_09b_atributo" value="<?php echo $row_datos_statusH['09b']; ?>" placeholder="Segundo Corte" >

</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning" id="basic-addon1"><i><b>C.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="noveno_09c_atributo" name="noveno_09c_atributo" value="<?php echo $row_datos_statusH['09c']; ?>" placeholder="Tercer Corte" >

</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning" id="basic-addon1"><i><b>D.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="noveno_09d_atributo" name="noveno_09d_atributo" value="<?php echo $row_datos_statusH['09d']; ?>" placeholder="Cuarto Corte" >

</div>

</div>





 <div class="form-row ml-3">

 <div class="input-group col-md-5 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning" id="basic-addon1"><i><b>10° Mes: <?php echo $decimo_pago; ?> - <?php echo $decimo_pago_mes; ?>; Corte A.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="decimo_10a_atributo" name="decimo_10a_atributo" value="<?php echo $row_datos_statusH['10a']; ?>" placeholder="Primer Corte" >

</div>


 <div class="input-group col-md-3 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning" id="basic-addon1"><i><b>Corte B.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="decimo_10b_atributo" name="decimo_10b_atributo" value="<?php echo $row_datos_statusH['10b']; ?>" placeholder="Segundo Corte" >

</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning" id="basic-addon1"><i><b>C.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="decimo_10c_atributo" name="decimo_10c_atributo" value="<?php echo $row_datos_statusH['10c']; ?>" placeholder="Tercer Corte" >

</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning" id="basic-addon1"><i><b>D.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="decimo_10d_atributo" name="decimo_10d_atributo" value="<?php echo $row_datos_statusH['10d']; ?>" placeholder="Cuarto Corte" >

</div>

</div>



 <div class="form-row ml-3">

 <div class="input-group col-md-5 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning" id="basic-addon1"><i><b>11° Mes: <?php echo $onceavo_pago; ?> - <?php echo $onceavo_pago_mes; ?>; Corte A.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="onceavo_11a_atributo" name="onceavo_11a_atributo" value="<?php echo $row_datos_statusH['11a']; ?>" placeholder="Primer Corte" >

</div>


 <div class="input-group col-md-3 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning" id="basic-addon1"><i><b>Corte B.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="onceavo_11b_atributo" name="onceavo_11b_atributo" value="<?php echo $row_datos_statusH['11b']; ?>" placeholder="Segundo Corte" >

</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning" id="basic-addon1"><i><b>C.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="onceavo_11c_atributo" name="onceavo_11c_atributo" value="<?php echo $row_datos_statusH['11c']; ?>" placeholder="Tercer Corte" >

</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning" id="basic-addon1"><i><b>D.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="onceavo_11d_atributo" name="onceavo_11d_atributo" value="<?php echo $row_datos_statusH['11d']; ?>" placeholder="Cuarto Corte" >

</div>

</div>



 <div class="form-row ml-3">

 <div class="input-group col-md-5 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning" id="basic-addon1"><i><b>12° Mes: <?php echo $doceavo_pago; ?> - <?php echo $doceavo_pago_mes; ?>; Corte A.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="doceavo_12a_atributo" name="doceavo_12a_atributo" value="<?php echo $row_datos_statusH['12a']; ?>" placeholder="Primer Corte" >

</div>


 <div class="input-group col-md-3 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning" id="basic-addon1"><i><b>Corte B.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="doceavo_12b_atributo" name="doceavo_12b_atributo" value="<?php echo $row_datos_statusH['12b']; ?>" placeholder="Segundo Corte" >

</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning" id="basic-addon1"><i><b>C.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="doceavo_12c_atributo" name="doceavo_12c_atributo" value="<?php echo $row_datos_statusH['12c']; ?>" placeholder="Tercer Corte" >

</div>


 <div class="input-group col-md-2 mt-2 mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text alert-warning" id="basic-addon1"><i><b>D.</b></i></span>  
                  </div>
<input maxlength="29" type="text" class="form-control" id="doceavo_12d_atributo" name="doceavo_12d_atributo" value="<?php echo $row_datos_statusH['12d']; ?>" placeholder="Cuarto Corte" >

</div>

</div>





 <div class="row ml-1">
 <div class="col-md-4 mt-2 mb-3">

            <button type="submit" name="save_atributos" class="btn btn-info btn-block"> <i class="far fa-save fa-lg"></i> Guardar Todos Los Indicadores</button>

</div>        




</div>
</form> 





















                           

            </div>   <!-- cierre container fluid -->
        </div>  <!-- cierre wrapper -->




<?php include ("Footer.php"); ?>
