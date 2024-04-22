<?php

include("identificador.php");

$nnn1 = $nnn['ci'];

include("../conectar.php");

mysqli_close($enlace);  






$el_cicloXX = $_GET['ciclo'];
$el_gradoXX = $_GET['grado'];

$tituloJKL = $_GET['tituloJKL'];



$i = 1;




 if(isset($_POST['editar_selecc']))
        {


 include("consultas_mod/chequeo_estudiantes_mod_corto.php");   // chequea que lo introducido este bien.




if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
  {
      $errorZ = " <i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp; " . $errorZ. " ";                 
  }

else { 

include ("../conectar.php");


 include("plantilla_estudiantes_00_update_corto.php");   // procesa los datos

 }


}  // cierre de modificar datos del estudiante









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










?>



<?php include ("Header.php"); ?>

<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->

<?php include ("listas_imp_php/lista_control_xxx.php"); ?>  <!-- ayuda a hacer el listado -->


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

   
<!--
  <div class="form-row ml-1"> <form action="zzz_impresiones/imp_lista_carta.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-primary mr-1 mb-1 btn_sizes" <?php if ($totalRows_control>=36){?>style="display:none"<?php } ?> >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Carta"</button>


</form>

<form action="zzz_impresiones/imp_lista_oficio.php" method="POST">

    <input type="hidden" id="id_cicloxxx"   name="id_cicloxxx"   value="<?php echo $el_cicloXX; ?>">
    <input type="hidden" id="id_gradoxxx"   name="id_gradoxxx"   value="<?php echo $el_gradoXX; ?>">
    <input type="hidden" id="id_seccionxxx" name="id_seccionxxx" value="<?php echo $la_seccionXX; ?>">
    <input type="hidden" id="id_tituloxxx"  name="id_tituloxxx"  value="<?php echo $tituloJKL; ?>">


          <button type="submit" name="imp_carta" id="imp_carta" class="btn btn-info btn_sizes" <?php if ($totalRows_control<=35){?>style="display:none"<?php } ?> >
           <i class="fas fa-print"></i>&nbsp;&nbsp; "Oficio"</button>


</form> </div>  -->


<div class="text-muted">Las fotos con el icono&nbsp;&nbsp;<span style="color:limegreen;"><i class="fas fa-chess-bishop fa-lg"></i></span>&nbsp;&nbsp;
        indican que el alumno es nuevo ingreso y que proviene de otra institución.</div>

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
                  
                  <th><i class="fas fa-cog"></i></th>
                  
                </tr>
              </thead>
                          
              
              <tbody>

                <?php do{?>    <!-- va generarme tantas filas como datos tenga esta BD -->

                <tr>

              

                  

<?php   

$id_estxx1 = $row_datos_control['id_estud'];


include("../conectar.php"); 

$reg_estu_HOYx = "SELECT * FROM  edades, reg_estu_actual  
           WHERE edades.id_edad = reg_estu_actual.edad_actual
             and id_estud = '$id_estxx1'

             and el_activo = '1'
            ORDER BY id_reg_estu_actual DESC LIMIT 1";   // me selecciona el ultimo es decir el actual en curso

$q_reg_estu_HOYx = mysqli_query($enlace, $reg_estu_HOYx) or die(mysqli_error());

$r_d_reg_estu_HOYx = mysqli_fetch_array($q_reg_estu_HOYx); 





$reg_sobre = "SELECT proviene_de_otro FROM reg_estu_sobre  
           WHERE  id_estud  = '$id_estxx1'";   //

$q_reg_sobreA = mysqli_query($enlace, $reg_sobre) or die(mysqli_error());

$r_d_reg_sobreD = mysqli_fetch_array($q_reg_sobreA);

mysqli_close($enlace);
                  
?>



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

    ;?>



      


    </td>



                    <td class="align-middle" align="center">




<?php  if ( $r_d_reg_sobreD['proviene_de_otro'] == '1') {
      $flechin = '<span style="color:limegreen;"><i class="fas fa-chess-bishop fa-lg"></i></span>'  ;
      echo $flechin;
    }

    ;?>




                  <img id="myImg" src="<?php echo $row_datos_control['foto_estu']; ?>?nocache=<?php echo time(); ?>"
                  alt="FOTO POR CARGAR"  onerror="this.src='../zz_fotos_p/ZZvacio5.jpg';" width="80px" />  </td>





                  <td class="align-middle" align="center"> 


                    <div class="form-row mb-2">

                      <!--boton 1 -->
                      <div class="col-lg-6" data-toggle="tooltip" data-placement="top" title="Modificar Datos">
  
                      <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal"
                              data-target="#modificar<?php echo $row_datos_control['id_estud']; ?>">
                                            <!-- este ultimo identifica cual modal abrir -->

                                         <i class="fas fa-edit"></i>
                      </button>

                      </div> 






<!-- ini modal editar -->

<div class="modal fade" id="modificar<?php echo $row_datos_control['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true"  >
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
        <i class="fas fa-info fa-lg"></i> &nbsp;Editar o Modificar!!!</h5>

        <button type="button" class="close"  data-dismiss="modal" aria-label="Close" >

          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">


       <?php include("plantilla_estudiantes_00_mod_corto.php"); ?>


        <input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_control['id_estud']; ?>">
        

      </div>  <!-- cierre modal body -->
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="editar_selecc" class="btn btn-info" value="<?php echo $row_datos_control['id_estud']; ?>">
              Modificar</button>  

      </div>
      </form>
               


    </div>
  </div>
</div>


<!-- cierre modal editar -->







                    </div>










<!--  *********** -->


 <div class="form-row"> 

                      <div class="col-lg-6">


                        <?php if ($row_datos_control['retirado_si_o_no']=='0') { ?>
                   
                    <span data-toggle="tooltip" data-placement="top" title="Retirar Alumno"> 
                    <button type="submit" name="cambio_status" class="btn btn-outline-success btn-sm" data-toggle="modal"
                    data-target="#desactivar<?php echo $row_datos_control['id_estud']; ?>" >        <!-- este ultimo identifica cual modal abrir -->
                    <i class="far fa-smile"></i></button>
                    </span> 

                    <?php   }?>



                    <?php if ($row_datos_control['retirado_si_o_no']=='1') { ?>
                    
                    <span data-toggle="tooltip" data-placement="top" title="Incorporar Alumno">
                    <button type="submit" name="cambio_status" class="btn btn-outline-secondary btn-sm"
                    data-toggle="modal" data-target="#activar<?php echo $row_datos_control['id_estud']; ?>" >       
                      <i class="far fa-meh"></i></button>
                    </span> 

                    <?php   }?>


                      </div>










<!-- ini modal retirar --> 
<div class="modal fade" id="desactivar<?php echo $row_datos_control['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-secondary" id="exampleModalLabel">
        <i class="far fa-bell-slash fa-lg"></i> &nbsp;Alerta!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">

<div class="form-row">
<div class="input-group col-lg-12 mb-2">
El alumno:&nbsp;&nbsp;  <b>" 
<?php

$id_del_reg = $row_datos_control['id_estud'];

include ("../conectar.php");

$query_quien_y = "SELECT * FROM quien_y_cuando_estu, usuarios                    
         WHERE  quien_y_cuando_estu.id_quien = usuarios.id        
         and  quien_y_cuando_estu.id_estud = '$id_del_reg' 
         LIMIT 1";

$datos_quien_y = mysqli_query($enlace, $query_quien_y) or die(mysqli_error());

$row_datos_quien_y = mysqli_fetch_array($datos_quien_y); 

$totalRows_datos_quien_y = mysqli_num_rows($datos_quien_y); 

mysqli_close($enlace);



$fecha_formateada = date('d-m-Y', strtotime($row_datos_quien_y['cuando_estu']));

echo $row_datos_control['nombre_estu'];?>, <?php echo $row_datos_control['apellidos_estu'] ;?>
 "
</b>.
</div>

<div class="input-group col-lg-12"> 
 Fue incorporado al sistema el
 <?php
 echo $fecha_formateada;
 ?>, por el &nbsp;<b><?php echo $row_datos_quien_y['cargo'] ;?></b>&nbsp; <?php echo $row_datos_quien_y['apellidos'] ;?>.
 </div>

</div>

<div class="form-row">
<div class="input-group col-md-12 mt-2 mb-1 text-muted ">
 <b>Indicar fecha de retiro:</b>
</div>
</div>


<div class="form-row">
<div class="input-group col-md-4 mb-1">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-minus fa-lg"></i></span>  
                  </div>
<input type="date" class="form-control importantex" id="retiro_date" name="retiro_date" required>

</div>
</div>


<div class="form-row">
<div class="input-group col-md-8 mt-2 mb-1 text-muted ">
 <b>Agregar nota relacionada con el retiro:</b>
</div>
</div>



<div class="form-row ">
<div class="col-md-12">
<textarea maxlength="250" class="form-control" id="nota_text<?php echo $row_datos_control['id_estud']; ?>" name="nota_text" rows="2" required></textarea>
<span id="chars<?php echo $row_datos_control['id_estud']; ?>">250</span> caracteres restantes.
</div>
</div> <!-- cierre row  de nota -->


<script type="text/javascript">
  
var maxLength = 250;
$('#nota_text<?php echo $row_datos_control['id_estud']; ?>').keyup(function() {
  var length = $(this).val().length;
  var length = maxLength-length;
  $('#chars<?php echo $row_datos_control['id_estud']; ?>').text(length);
});

</script>

<br>

<div class="form-row ">

 <?php

$fecha1="2000-10-10";

 $mensajexx1 = "Nota: Anteriormente el estudiante había sido retirado el: "; 
 $mensajexx2 = "  Y re-incorporado el: "; 
 $puntico =".";

 if ($row_datos_quien_y['fecha_retiro'] > $fecha1 ) {

$fecha_formatxxx = date('d-m-Y', strtotime($row_datos_quien_y['fecha_retiro']));
$fecha_formatyyy = date('d-m-Y', strtotime($row_datos_quien_y['fecha_reincorp']));


   echo $mensajexx1; echo $fecha_formatxxx; echo $puntico; echo $mensajexx2; echo $fecha_formatyyy;
 }



?>.
</div>



</div> <!-- cierre modal body -->
      <div class="modal-footer"> 

    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

<input name="desactivar_status" type="hidden" value="0">

    <button type="submit" name="retirar_alumno" class="btn btn-secondary"
    value="<?php echo $row_datos_control['id_estud']; ?>" > Retirar</button>

      </div>
      </form>

    </div>
  </div>
</div>
<!-- cierre modal de desactivar --> 












<!-- ini modal incorporar -->   
<div class="modal fade" id="activar<?php echo $row_datos_control['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLabel">
        <i class="far fa-bell fa-lg"></i> &nbsp;Atención!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body">

<div class="form-row">
<div class="input-group col-lg-12 mb-1">
  <?php


$id_del_reg = $row_datos_control['id_estud'];

include ("../conectar.php");

$query_quien_y = "SELECT * FROM quien_y_cuando_estu, usuarios                    
         WHERE  quien_y_cuando_estu.id_quien = usuarios.id        
         and  quien_y_cuando_estu.id_estud = '$id_del_reg' 
         LIMIT 1";

$datos_quien_y = mysqli_query($enlace, $query_quien_y) or die(mysqli_error());

$row_datos_quien_y = mysqli_fetch_array($datos_quien_y); 

$totalRows_datos_quien_y = mysqli_num_rows($datos_quien_y); 

mysqli_close($enlace);





$fecha_formateada1 = date('d-m-Y', strtotime($row_datos_quien_y['cuando_estu']));
$fecha_formateada = date('d-m-Y', strtotime($row_datos_quien_y['fecha_retiro']));
  ?>

El estudiante &nbsp;
<b>"  
<?php
echo $row_datos_control['nombre_estu'];?>, <?php echo $row_datos_control['apellidos_estu'] ;?> 
"&nbsp; </b>.
</div>

<div class="input-group col-lg-12 mb-1"> 

 Fue incorporado al sistema el
 <?php
 echo $fecha_formateada1;
 ?>, por el &nbsp;<b><?php echo $row_datos_quien_y['cargo'] ;?></b>&nbsp; <?php echo $row_datos_quien_y['apellidos'] ;?>.
</div>



<div class="input-group col-lg-12 mb-2">
 Y fue retirado anteriormente del sistema el
 <?php
 echo $fecha_formateada;
 ?>. 
</div>
</div>

<div class="form-row">
<div class="input-group col-md-6 mt-2 mb-1 text-success ">
 <b>Indicar nueva fecha de re-incorporación:</b>
</div>
</div>

<div class="form-row">
<div class="input-group col-md-4 mb-1">

                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-plus fa-lg"></i></span>  
                  </div>
<input type="date" class="form-control importantex" id="activar_date" name="activar_date"
aria-label="activar_date">

</div>
</div>


<div class="form-row">
<div class="input-group col-md-6 mb-3">
<small class="form-text text-success">Puede usar la fecha anterior de incorporación.</small>
</div>
</div>



<div class="form-row">
<div class="input-group col-md-8 mt-2 mb-1 text-muted ">
 <b>Razones por las cuales se retiró anteriormente:</b>
</div>
</div>

<div class="form-row mb-3">

<div class="col-md-12">

<div class="input-group col-md-12 desincorporadopor">

<?php
echo $row_datos_quien_y['tex_retiro'];
 ?>
   <!-- cierre  nota de desincorporación -->
</div>

</div>

</div>




<br>






      </div> <!-- cierre modal body -->
      <div class="modal-footer">  

    <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>

<input name="activar_status" type="hidden" value="1">

    <button type="submit" name="incorporar_estudiante" class="btn btn-success"
    value="<?php echo $row_datos_control['id_estud']; ?>" > Re-incorporar</button>

      </div>
       </form>

    </div>
  </div>
</div>
<!-- cierre modal de activar --> 










                    </div>







<!-- *****   -->



















                    




                  </td>
                  



                </tr>
                


                 <?php } while ($row_datos_control = mysqli_fetch_assoc($datos_control)); ?>

                
              </tbody>

            </table>

          </div> <!-- cierre tabla responsiva -->

        </div>  <!-- cierre card body -->

       

    <div class="card-footer text-muted"><b>Info:</b> Puede mover entre secciones, acomodar apellidos y nombres, retirar al alumno he imprimir el listado.</div> 

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
