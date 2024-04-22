<?php

include("identificador.php");

error_reporting(0);

$nnn1 = $nnn['ci'];



 if(isset($_POST['delete_selecc']))
    {


      $id_registro = $_POST['id_registro'];

include("../conectar.php");

$delete = "DELETE FROM extra_catedra
WHERE id_extra = '$id_registro' ";


            if (!mysqli_query($enlace,$delete))      // actualiza y si no logra ingresar los datos...
               {
                        $errorZ .="No se logro, remover al estudiante del registro.";  
                        mysqli_close($enlace);
               }               

            else{

              $exitoZ .="El estudiante ha sido removido del registro."; 

              mysqli_close($enlace);  
            }
    }









$el_cicloXX = $_GET['ciclo'];
$consulXX = $_GET['consul'];
$tituloJKL = $_GET['ttitulo'];



$i = 1;








?>



<?php include ("Header.php"); ?>

<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->

<?php include ("listas_imp_php/lista_control_extra.php"); ?>  <!-- ayuda a hacer el listado -->


<div class="se-pre-con"></div>


<div class="content-wrapper">
  <div class="container-fluid">

    <div class="form-row">  


          <div class="col-md-4 col-lg-4 mb-2">

            <div class="input-group-text alert-primary text-left text-truncate" role="alert" id="basic-addon1">
            <i><b><?php echo $tituloJKL; ?> &nbsp; -  &nbsp;&nbsp;&nbsp;<i class="fas fa-female"></i> : <?php echo $totalRows_controlF; ?>&nbsp;&nbsp; / &nbsp;&nbsp;&nbsp;<i class="fas fa-male"></i> : <?php echo $totalRows_controlM; ?></b> </i></div> 

          </div> 


          <div class="col-md-8 col-lg-8 mb-2">
          

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

   

  <div class="form-row ml-1">

<div data-toggle="tooltip" data-placement="top" title="Imprimir Lista" >

 <form target="_blank" action="zzz_impresiones/imp_lista_carta_extra.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_consulXX"   name="id_consulXX"   value="<?php echo $consulXX; ?>">
  <!--  <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>"> -->
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-primary mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=28){?>style="display:none"<?php } ?> >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Carta"</button>


</form> </div>




<div class="mr-1" data-toggle="tooltip" data-placement="top" title="Imprimir Lista" >

<form target="_blank" action="zzz_impresiones/imp_lista_oficio_extra.php" method="POST">

   <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_consulXX"   name="id_consulXX"   value="<?php echo $consulXX; ?>">
  <!--  <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>"> -->
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-primary btn_sizes" <?php if ($totalRows_control<=27){?>style="display:none"<?php } ?> >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Oficio"</button>


</form> </div>





<div data-toggle="tooltip" data-placement="top" title="Listado con datos de alumnos y representante" >
<form target="_blank" action="zzz_impresiones/imp_ofi_datos_horizontal_extra.php" method="POST">

   <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_consulXX"   name="id_consulXX"   value="<?php echo $consulXX; ?>">
  <!--  <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>"> -->
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_ofi_datos_horizontal" id="imp_ofi_datos_horizontal" class="btn btn-dark mr-1 mb-1 btn_sizes"  >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Oficio - <i class="fas fa-tasks"></i>"</button>


</form></div>




<div data-toggle="tooltip" data-placement="top" title="Lista Detalle" >
<form target="_blank" action="zzz_impresiones/imp_ofi_datos_horizontal_extra_obs.php" method="POST">

   <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_consulXX"   name="id_consulXX"   value="<?php echo $consulXX; ?>">
  <!--  <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>"> -->
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_ofi_datos_horizontal_obs" id="imp_ofi_datos_horizontal_obs" class="btn btn-info mr-1 mb-1 btn_sizes"  >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Oficio - <i class="fas fa-tasks"></i>"</button>


</form></div>







<div data-toggle="tooltip" data-placement="top" title="Listado con datos importantes" >
<form target="_blank" action="zzz_impresiones/imp_ofi_datos_plus_extra.php" method="POST">

     <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_consulXX"   name="id_consulXX"   value="<?php echo $consulXX; ?>">
  <!--  <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>"> -->
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_ofi_datos_horizontal_plus" id="imp_ofi_datos_horizontal_plus" class="btn btn-success mr-1 mb-1 btn_sizes"  >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Oficio - <i class="fas fa-birthday-cake"></i> <i class="fas fa-phone"></i>"</button>


</form></div>



<div data-toggle="tooltip" data-placement="top" title="Listado para reuniones" >
<form target="_blank" action="zzz_impresiones/imp_ofi_datos_reuniones_extra.php" method="POST">

   <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_consulXX"   name="id_consulXX"   value="<?php echo $consulXX; ?>">
  <!--  <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>"> -->
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_ofi_datos_reuniones" id="imp_ofi_datos_reuniones" class="btn btn-secondary mr-1 mb-1 btn_sizes"  >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Oficio - <i class="fas fa-file-signature"></i>"</button>


</form></div>





<div data-toggle="tooltip" data-placement="top" title="Datos Medicos" >
<form target="_blank" action="zzz_impresiones/imp_ofi_datos_medicos_extra.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_consulXX"   name="id_consulXX"   value="<?php echo $consulXX; ?>">
  <!--  <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>"> -->
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_ofi_datos_medicos" id="imp_ofi_datos_medicos" class="btn btn-danger mr-1 mb-1 btn_sizes"  >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Oficio - <i class="fas fa-medkit"></i>"</button>


</form></div>




</div>














        <div class="text-muted">El icono&nbsp;&nbsp;<span style="color:#FF8F00;"><i class="fab fa-r-project fa-lg"></i></span>&nbsp;&nbsp;
        indica que el alumno es repitiente.</div>




  <div class="card mb-3 separacionpequena" >
       

        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered table-sm table-hover" id="dataTable" width="100%" cellspacing="0"  >
             
              <thead>
                <tr>
                  
                  <th>N° de Lista</th>
                  <th>Apellidos:</th>
                  <th>Nombres:</th>
                  <th>Edad:</th>
                                  
                  <th><i class="fas fa-camera"></i></th>
                  <th>Año/Grado:</th>

                  <th>Datos / Obs:</th>                  
                  
                  <th><i class="fas fa-cog"></i></th>
                  
                </tr>
              </thead>
                          
              
              <tbody>

                <?php do{?>    <!-- va generarme tantas filas como datos tenga esta BD -->


                <?php

$id_estxx1 = $row_datos_control['id_estud'];

include("../conectar.php");

 $remarcador = "SELECT obs_estud FROM obs_estu
              WHERE  id_estud = '$id_estxx1' limit 1   ";

$query_remarcador = mysqli_query($enlace, $remarcador);

$dato_remarcador = mysqli_fetch_array($query_remarcador); 

$la_obs = $dato_remarcador['obs_estud'];



$reg_estu_HOYx = "SELECT * FROM  edades, reg_estu_actual  
           WHERE edades.id_edad = reg_estu_actual.edad_actual
             and id_estud = '$id_estxx1'

             and el_activo = '1'
            ORDER BY id_reg_estu_actual DESC LIMIT 1";   // me selecciona el ultimo es decir el actual en curso

$q_reg_estu_HOYx = mysqli_query($enlace, $reg_estu_HOYx) or die(mysqli_error());

$r_d_reg_estu_HOYx = mysqli_fetch_array($q_reg_estu_HOYx); 




$sql_countpptt = "SELECT COUNT(*) total FROM reg_estu_actual where id_estud = '$id_estxx1'";
$result_countpptt = mysqli_query($enlace, $sql_countpptt) or die(mysqli_error());
$el_conteopptt = mysqli_fetch_assoc($result_countpptt);
$el_totalpptt = $el_conteopptt['total'];






$reg_sobre = "SELECT proviene_de_otro, nombre_plantel_pro FROM reg_estu_sobre  
           WHERE  id_estud  = '$id_estxx1'";   //

$q_reg_sobreA = mysqli_query($enlace, $reg_sobre) or die(mysqli_error());

$r_d_reg_sobreD = mysqli_fetch_array($q_reg_sobreA);



 mysqli_close($enlace); 

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



                <tr style="background-color: <?php echo $bg_es;?>;">

              




    <td class="align-middle" align="center">
      
<?php


    echo $i;
    $i++;

    
  ?>



    </td>

    <td class="align-middle" align="center"><?php echo $row_datos_control['apellidos_estu'];?> </td>



    <td class="align-middle" align="center"><?php echo $row_datos_control['nombre_estu']; $la_edad=$r_d_reg_estu_HOYx["nombre_edad"]; ?> </td>



    <td class="align-middle" align="center">

      <?php  if ( $row_datos_control['id_sexo'] == '2') {
      $edadM1 = '<span style="color:#417FD5;"><b>'  ;
       $edadM2 = '</b> años</span> '  ;
      echo " ".$edadM1."  ".$r_d_reg_estu_HOYx["nombre_edad"]." ".$edadM2." ";
    }

    else 
      {

       $edadM1 = '<span style="color:#ff3399;"><b>'  ;
       $edadM2 = '</b> años</span> '  ;
      echo " ".$edadM1."  ".$r_d_reg_estu_HOYx["nombre_edad"]." ".$edadM2." ";
    }

    ;?><br>


     <?php


            $diaf = date('d', strtotime($row_datos_control['nacimiento_estu']) );
            $mesf = date('n', strtotime($row_datos_control['nacimiento_estu']) ); 
 
            $mf="";
            switch ($mesf) {
                case 1:$mf="Enero"; break;
                case 2:$mf="Febrero"; break;
                case 3:$mf="Marzo"; break;
                case 4:$mf="Abril"; break;
                case 5:$mf="Mayo"; break;
                case 6:$mf="Junio"; break;
                case 7:$mf="Julio"; break;
                case 8:$mf="Agosto"; break;
                case 9:$mf="Septiembre"; break;
                case 10:$mf="Octubre"; break;
                case 11:$mf="Noviembre"; break;
                case 12:$mf="Diciembre"; break;
            }
    
       ?>

    <span style="color: #876DA0;"><i class="fas fa-birthday-cake"></i></span>  <?php echo $diaf; ?> de <?php echo $mf; ?>



      


    </td>







                    <td class="align-middle" align="center">



                  <img id="myImg" src="<?php echo $row_datos_control['foto_estu']; ?>?nocache=<?php echo time(); ?>"
                  alt="FOTO POR CARGAR"  onerror="this.src='../zz_fotos_p/ZZvacio5.jpg';" width="80px" />  </td>








<?php   

$id_estxx1 = $row_datos_control['id_estud'];


include("../conectar.php"); 

$reg_estu_HOYx = "SELECT * FROM grados, secciones, edades, reg_estu_actual  
           WHERE  grados.id_grado  = reg_estu_actual.grado_actual             
             and  secciones.id_seccion = reg_estu_actual.id_seccion
             and edades.id_edad = reg_estu_actual.edad_actual
             and id_estud = '$id_estxx1'

             and el_activo = '1'
            ORDER BY id_reg_estu_actual DESC LIMIT 1";   // me selecciona el ultimo es decir el actual en curso

$q_reg_estu_HOYx = mysqli_query($enlace, $reg_estu_HOYx) or die(mysqli_error());

$r_d_reg_estu_HOYx = mysqli_fetch_array($q_reg_estu_HOYx); 



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













<td class="align-middle" align="center" style="background-color: <?php echo $bgBB_es;?>;" ><?php echo $r_d_reg_estu_HOYx['nombre_grados']; ?> <br> "<b><?php echo $r_d_reg_estu_HOYx['nombre_seccion']; ?></b> "


<br> <?php

if ($r_d_reg_estu_HOYx['fecha_inscripcion'] != "" ) {


   $fecha_formateadAAA = date('d-m-Y', strtotime($r_d_reg_estu_HOYx['fecha_inscripcion']));

    echo "Inscrito(a) el:<br>";
    echo "<span style=\"color:green;\">";
    echo $fecha_formateadAAA;
    echo "<span>";

 } 

  ?>
     </td>           


                



                  <td class="align-middle" align="center" width="30%">


<?php  if ( $r_d_reg_estu_HOYx['repite_actual'] != '2') {
      $re_re = '<span style="color:#FF8F00;"><b><i class="fab fa-r-project fa-lg"></i></b></span><br>'  ;
      echo $re_re;      
    }

    ;?>  


                    

<?php  if ( $r_d_reg_sobreD['proviene_de_otro'] == '1' && $el_totalpptt =='1') {
      $flechin = '<span style="color:limegreen;"><b>Proviene de:</b></span><br>'  ;
      echo $flechin;
      echo $r_d_reg_sobreD['nombre_plantel_pro'];
    }



    if ( $r_d_reg_sobreD['proviene_de_otro'] == '1' && $el_totalpptt =='2') {
       $flechin = '<span style="color:#4B0082;"><b>El año ante-pasado curso en:</b></span><br>'  ;
      echo $flechin;
      echo $r_d_reg_sobreD['nombre_plantel_pro'];
    }




    ;?> <br> <span style="color:#EF1752;"><?php echo $la_obs; ?></span> 




<?php  

$el_es = $row_datos_control['id_estud'];

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



  <?php 
          include("../conectar.php");

$el_idesito = $row_datos_control['id_estud'];

$query_ya_esta = "SELECT * FROM extra_catedra, plantilla_areas 
                      where extra_catedra.id_area = plantilla_areas.id_area
                      and extra_catedra.id_estud = '$el_idesito'
                      Group by nombre_area asc";
$datos_ya_esta = mysqli_query($enlace, $query_ya_esta) or die(mysqli_error());
$row_ya_esta = mysqli_fetch_assoc($datos_ya_esta);
$el_conteo = mysqli_num_rows($datos_ya_esta);


                                          mysqli_close($enlace); 

                                          ?>
<div <?php if ($el_conteo===0){?>style="display:none"<?php } ?> >
  
         <br><b>Pertenece a:</b> 

           <?php do{?> <?php echo $row_ya_esta['nombre_area']; ?>,
         

         <?php } while ($row_ya_esta = mysqli_fetch_assoc($datos_ya_esta)); ?>   
</div>


                  </td>






                  <td class="align-middle" align="center"> 


                    <div class="form-row mb-2">

                      <!--boton 1 -->
                      <div class="col-lg-6" data-toggle="tooltip" data-placement="top" title="Remover del listado">
  
                      <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal"
                              data-target="#deleted<?php echo $row_datos_control['id_estud']; ?>">
                                            <!-- este ultimo identifica cual modal abrir -->

                                         <i class="fas fa-user-minus fa-lg"></i>
                      </button>

                      </div> 






<!-- ini modal editar -->

<div class="modal fade" id="deleted<?php echo $row_datos_control['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true"  >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">
        <i class="fas fa-info fa-lg"></i> &nbsp;Atención!!!</h5>

        <button type="button" class="close"  data-dismiss="modal" aria-label="Close" >

          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">



        <br> <b>"<?php echo $row_datos_control['apellidos_estu'];?>,  <?php echo $row_datos_control['nombre_estu'];?> 
        "</b> <br>Quedará fuera de la lista!!!  


        <input type="hidden" id="id_registro"   name="id_registro"  value="<?php echo $row_datos_control['id_extra']; ?>">
        

      </div>  <!-- cierre modal body -->
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="delete_selecc" class="btn btn-danger" value="<?php echo $row_datos_control['id_estud']; ?>">
              Remover</button>  

      </div>
      </form>
               


    </div>
  </div>
</div>


<!-- cierre modal editar -->







                    </div>




                  </td>
                  



                </tr>
                


                 <?php } while ($row_datos_control = mysqli_fetch_assoc($datos_control)); ?>

                
              </tbody>

            </table>

          </div> <!-- cierre tabla responsiva -->

        </div>  <!-- cierre card body -->

       

    <div class="card-footer text-muted"><b>Info:</b> Puede consultar he imprimir las listas, así como eliminar del listado a uno de los estudiantes.</div> 

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
