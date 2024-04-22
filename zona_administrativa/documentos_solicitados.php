<?php

include("identificador.php");

error_reporting(0);

$nnn1 = $nnn['ci'];

include("../conectar.php");

mysqli_close($enlace);  


$i = 1;



// actualiza mensajes solicitados


 if(isset($_POST['mensajes_soli']))
        {

      if (!$_POST['mensaje_uno'])      // verifica que no este vacío
    {   $errorZ .= "- El párrafo principal y final son necesarios. "; }

        if (!$_POST['mensaje_tres'])      // verifica que no este vacío
    {   $errorZ .= "- El párrafo principal y final son necesarios. "; }
      

      
       if ($errorZ!="")            //  si $errorZ es distinto de vacío,  es que ha habido algun error
              {
                 $errorZ = "<i class=\"fas fa-exclamation-triangle fa-lg\"></i> &nbsp;" . $errorZ. "";

              }


      else  // tras haber confirmado el correcto relleno de los campos
        {
        
            include("../conectar.php");

           // $dato = $_POST["nombre_area"];

   
   $sql = "UPDATE documentos_mensajes SET mensaje_soli = '".mysqli_real_escape_string($enlace,$_POST['mensaje_uno'])."' ,
                                           mensaje_dos = '".mysqli_real_escape_string($enlace,$_POST['mensaje_dos'])."' ,
                                          mensaje_tres = '".mysqli_real_escape_string($enlace,$_POST['mensaje_tres'])."'
                                                            
                                WHERE id_doc_msj = '1' ";

                       
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

                     $exitoZ = "Mensaje de solicitud de documentos actualizado.";                      
                }     

                if ($exitoZ!="")            //  si $exitoZ es distinto de vacío,  es que todo ok
                          {
                             $exitoZ = " <i class=\"far fa-thumbs-up fa-lg\"></i> &nbsp; " . $exitoZ. " "; 
                              mysqli_close($enlace);            
                          }
                      

        }   

    } // cierre if en caso de actualizar  





include("../conectar.php");

$query_msj = "SELECT * FROM documentos_mensajes where id_doc_msj = '1' limit 1 ";

          $resultquery_msj = mysqli_query($enlace,$query_msj);
          $fila_query_msj=mysqli_fetch_array($resultquery_msj);                   

$datos_msj = $fila_query_msj["mensaje_soli"];
$datos_dos = $fila_query_msj["mensaje_dos"];
$datos_tres = $fila_query_msj["mensaje_tres"];

mysqli_close($enlace); 




if(isset($_POST['cambiar_estudio']))
{     

include ("../conectar.php");
$id_estud = $_POST["id_estu"];

$upd = " SELECT id_doc_sol, status_estu FROM documentos_solicitados where id_estud = '$id_estud' LIMIT 1 ";

$resultupd = mysqli_query($enlace,$upd);
$filaupd = mysqli_fetch_array($resultupd);       

$id_del_reg =  $filaupd["id_doc_sol"];

$R_resultadin =  $filaupd["status_estu"];

if ($R_resultadin == '' or $R_resultadin == '5' ) {
 $errorZ="- Nada que cambiar. ";
 mysqli_close($enlace);
}

else {

$sql_ytr = "UPDATE documentos_solicitados SET status_estu = '5' 
                                      WHERE id_doc_sol = '$id_del_reg' LIMIT 1 ";

                                      if (!mysqli_query($enlace,$sql_ytr))      // si no ha logrado actualizar
                         {
                          $errorZ="- Solicitud no procesada, intente de nuevo, de ser necesario contacte al Ing. ";
                          mysqli_close($enlace);
                          }

                      else {

                        $exitoZ.="- &nbsp;La constancia de &nbsp;<b>Estudio</b>&nbsp; ha cambiado de estado. &nbsp; <i class=\"fas fa-exchange-alt fa-lg\"></i> &nbsp ";
                       mysqli_close($enlace);

                      }  
}


}  // cierre clic para solicitar constancia de estudio...



if(isset($_POST['cambiar_retiro']))
{     

include ("../conectar.php");
$id_estud = $_POST["id_estu"];

$upd = " SELECT id_doc_sol, status_ret FROM documentos_solicitados where id_estud = '$id_estud' LIMIT 1 ";

$resultupd = mysqli_query($enlace,$upd);
$filaupd = mysqli_fetch_array($resultupd);       

$id_del_reg =  $filaupd["id_doc_sol"];

$R_resultadin =  $filaupd["status_ret"];

if ($R_resultadin == '' or $R_resultadin == '5' ) {
 $errorZ="- Nada que cambiar. ";
 mysqli_close($enlace);
}

else {

$sql_ytr = "UPDATE documentos_solicitados SET status_ret = '5' 
                                      WHERE id_doc_sol = '$id_del_reg' LIMIT 1 ";

                                      if (!mysqli_query($enlace,$sql_ytr))      // si no ha logrado actualizar
                         {
                          $errorZ="- Solicitud no procesada, intente de nuevo, de ser necesario contacte al Ing. ";
                          mysqli_close($enlace);
                          }

                      else {

                        $exitoZ.="- &nbsp;La constancia de &nbsp;<b>Retiro</b>&nbsp; ha cambiado de estado. &nbsp; <i class=\"fas fa-exchange-alt fa-lg\"></i> &nbsp ";
                       mysqli_close($enlace);

                      } 

     }        
}  // cierre clic para solicitar constancia de estudio...




if(isset($_POST['cambiar_inscripcion']))
{     

include ("../conectar.php");
$id_estud = $_POST["id_estu"];

$upd = " SELECT id_doc_sol, status_ins FROM documentos_solicitados where id_estud = '$id_estud' LIMIT 1 ";

$resultupd = mysqli_query($enlace,$upd);
$filaupd = mysqli_fetch_array($resultupd);       

$id_del_reg =  $filaupd["id_doc_sol"];

$R_resultadin =  $filaupd["status_ins"];

if ($R_resultadin == '' or $R_resultadin == '5' ) {
 $errorZ="- Nada que cambiar. ";
 mysqli_close($enlace);
}

else {

$sql_ytr = "UPDATE documentos_solicitados SET status_ins = '5' 
                                      WHERE id_doc_sol = '$id_del_reg' LIMIT 1 ";

                                      if (!mysqli_query($enlace,$sql_ytr))      // si no ha logrado actualizar
                         {
                          $errorZ="- Solicitud no procesada, intente de nuevo, de ser necesario contacte al Ing. ";
                          mysqli_close($enlace);
                          }

                      else {

                        $exitoZ.="- &nbsp;La constancia de &nbsp;<b>Inscripción</b>&nbsp; ha cambiado de estado. &nbsp; <i class=\"fas fa-exchange-alt fa-lg\"></i> &nbsp ";
                       mysqli_close($enlace);

                      } 

  }
}  // cierre clic para solicitar constancia de estudio...




if(isset($_POST['cambiar_aceptacion']))
{     

include ("../conectar.php");
$id_estud = $_POST["id_estu"];

$upd = " SELECT id_doc_sol, status_acep FROM documentos_solicitados where id_estud = '$id_estud' LIMIT 1 ";

$resultupd = mysqli_query($enlace,$upd);
$filaupd = mysqli_fetch_array($resultupd);       

$id_del_reg =  $filaupd["id_doc_sol"];

$R_resultadin =  $filaupd["status_acep"];

if ($R_resultadin == '' or $R_resultadin == '5' ) {
 $errorZ="- Nada que cambiar. ";
 mysqli_close($enlace);
}

else {

$sql_ytr = "UPDATE documentos_solicitados SET status_acep = '5' 
                                      WHERE id_doc_sol = '$id_del_reg' LIMIT 1 ";

                                      if (!mysqli_query($enlace,$sql_ytr))      // si no ha logrado actualizar
                         {
                          $errorZ="- Solicitud no procesada, intente de nuevo, de ser necesario contacte al Ing. ";
                          mysqli_close($enlace);
                          }

                      else {

                        $exitoZ.="- &nbsp;La constancia de &nbsp;<b>Aceptación</b>&nbsp; ha cambiado de estado. &nbsp; <i class=\"fas fa-exchange-alt fa-lg\"></i> &nbsp ";
                       mysqli_close($enlace);
 
                      } 
  } 
}  // cierre clic para solicitar constancia de estudio...   






if(isset($_POST['destroy_all']))
{     

include ("../conectar.php");

$sql = "DELETE FROM documentos_solicitados ";

if (mysqli_query($enlace, $sql)) {
     $exitoZ.="- &nbsp; Listado Completamente Borrado. &nbsp; <i class=\"fas fa-check fa-lg\"></i> &nbsp ";
     mysqli_close($enlace);
}

 else {
    $errorZ="- Solicitud no procesada, intente de nuevo, de ser necesario contacte al Ing. ";
    mysqli_close($enlace);
}


}  // cierre clic para solicitar constancia de estudio...   








if(isset($_POST['eliminar_registro']))
{     

include ("../conectar.php");
$id_estud = $_POST["id_estu"];

$upd = " SELECT id_doc_sol FROM documentos_solicitados where id_estud = '$id_estud' LIMIT 1 ";

$resultupd = mysqli_query($enlace,$upd);
$filaupd = mysqli_fetch_array($resultupd);       

$id_del_reg =  $filaupd["id_doc_sol"];




// sql to delete a record
$sql = "DELETE FROM documentos_solicitados WHERE id_doc_sol = '$id_del_reg' ";

if (mysqli_query($enlace, $sql)) {
     $exitoZ.="- &nbsp; Registro Borrado. &nbsp; <i class=\"fas fa-check fa-lg\"></i> &nbsp ";
                       mysqli_close($enlace);
} else {
    $errorZ="- Solicitud no procesada, intente de nuevo, de ser necesario contacte al Ing. ";
    mysqli_close($enlace);
}





}  // cierre clic para solicitar constancia de estudio...   




if(isset($_POST['buscalo']))
    {



if (strlen($_POST['buscar_estud']) <=2 )  // no sea mayor a 40 caracteres
    {   

    $xxxsearch = "xxxxxx";

    header( "Location: documentos_solicitados_search.php?ciclo=".$id_periodo_clave."&criterio=".$xxxsearch."&alertin=5" ); 

     }


else { 

      $busqueda = $_POST['buscar_estud'];



      include("../conectar.php");

            $query_bus = " SELECT * FROM  reg_estu_actual, (
          
      SELECT reg_estudiantes.*, religiones.tipo_religion, tb_medicos.nombre_medico 
      FROM reg_estudiantes

      INNER JOIN tb_medicos ON reg_estudiantes.id_medico=tb_medicos.id_medico
      INNER JOIN religiones ON reg_estudiantes.id_religion=religiones.id_religion  ) AS Virtual_table

      WHERE  reg_estu_actual.id_estud = Virtual_table.id_estud
              
               and  reg_estu_actual.el_activo = '1'
               and  reg_estu_actual.cursa_actualmente = '$id_periodo_clave'
               
               and Virtual_table.retirado_si_o_no = '0'
                  

               and Virtual_table.nombre_medico LIKE '%".$busqueda."%' or Virtual_table.ci_estu LIKE '".$busqueda."%'
               OR  Virtual_table.nombre_estu LIKE '%".$busqueda."%' OR  Virtual_table.apellidos_estu LIKE '%".$busqueda."%'   GROUP BY Virtual_table.id_estud ";



      $datos_plantilla_bus = mysqli_query($enlace, $query_bus) or die(mysqli_error());
      $totalRows_datos_plantilla_bus = mysqli_num_rows($datos_plantilla_bus); 

      mysqli_close($enlace); 




      if ($totalRows_datos_plantilla_bus == '0') {

        $xxxsearch = "xxxxxx";

       header( "Location: documentos_solicitados_search.php?ciclo=".$id_periodo_clave."&criterio=".$xxxsearch."&alertin=55" );


      }



      if ($totalRows_datos_plantilla_bus >= '1' and $totalRows_datos_plantilla_bus <= '16') {

        header( "Location: documentos_solicitados_search.php?ciclo=".$id_periodo_clave."&criterio=".$busqueda."&alertin=0" );

      }


      if ($totalRows_datos_plantilla_bus >= '17') {

        $xxxsearch = "xxxxxx";

        header( "Location: documentos_solicitados_search.php?ciclo=".$id_periodo_clave."&criterio=".$xxxsearch."&alertin=1" ); 

      }

}

    }  // cierre principal del if


?>



<?php include ("Header.php"); ?>

<?php include ("../conectar.php"); ?>   <!--   necesario para poder listar -->

<?php include ("listas_php/doc_soli.php"); ?>    <!--  ayuda a hacer el listado -->


<div class="se-pre-con"></div>


<div class="content-wrapper">
  <div class="container-fluid">

    <div class="form-row">  


          <div class="col-md-4 col-lg-4 mb-2">

            <div class="input-group-text alert-primary text-left text-truncate" role="alert" id="basic-addon1">
            <i><b>Documentos Solicitados:</b> </i></div> 

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



    <div class="form-row">  


          <div class="col-md-12 col-lg-12 mt-2 mb-2 ml-1">


            <form method="POST">
<div class="form-row border border-success rounded p-2 col-md-12">

  <div class="col-md-10 mb-2">
  <h5 class="text-success">Conjunto de párrafos que conforman el mensaje mostrado al solicitar un documento:</h5>
  </div>

  <div class="col-md-2 mb-2">
  <button type="submit" name="mensajes_soli" class="btn btn-success btn-block">¡Actualizar mensaje!</button>
  </div>

<div class="input-group mb-2">
  <div class="input-group-prepend">
    <span class="input-group-text alert-success" id="basic-addon1"><b>Párrafo Principal:</b></span>
  </div>

  <input maxlength="248" class="form-control " type="text" value="<?php echo $datos_msj; ?>" id="" name="mensaje_uno">

</div>



<div class="input-group mb-2">
  <div class="input-group-prepend">
    <span class="input-group-text alert-success" id="basic-addon1"><b>Párrafo Intermedio:</b></span>
  </div>

  <input maxlength="148" class="form-control " type="text" value="<?php echo $datos_dos; ?>" id="" name="mensaje_dos">
</div>



<div class="input-group mb-2">
  <div class="input-group-prepend">
    <span class="input-group-text alert-success" id="basic-addon1"><b>Párrafo Final:</b></span>
  </div>

  <input maxlength="98" class="form-control " type="text" value="<?php echo $datos_tres; ?>" id="" name="mensaje_tres">

</div>


</div>
</form>


          </div>

    </div>




    <div class="form-row">  


          <div class="col-md-6 col-lg-6 mt-4 mb-1">
<form method="POST">

            <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text alert-primary">Buscar nuevo(s) estudiante(s):</span>
            </div>


            <input type="text" class="form-control" name="buscar_estud" placeholder="Nombres --- Apellidos --- Ci / Cedula Escolar..." aria-label="">
            <div class="input-group-append">
              <button type="submit" name="buscalo" class="btn btn-primary"><i style="color:white;">Buscar... <i class="fas fa-search fa-lg "></i></i></button>
            </div>


          </div>


 </form>

          </div>

          <div class="col-md-2 col-lg-2 mt-4 mb-1">
          </div>


          <div class="col-md-4 col-lg-4 mt-4 mb-1">
            
              <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#destroy">Borrar todo el listado... <i class="fas fa-bomb fa-lg "></i></button>            

          </div>  




           <!-- ini modal selecc -->

<div class="modal fade" id="destroy" tabindex="-1" role="dialog" aria-hidden="true"  >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">
        <i class="fas fa-info fa-lg"></i> &nbsp;¡ALERTA!</h5>

        <button type="button" class="close"  data-dismiss="modal" aria-label="Close" >

          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body"> 

        
<h5>Desea eliminar por completo el registro de solicitudes realizadas hasta el momento?</h5> <br>

<h5 style="color:red;">Esta acción no puede ser revertida...</h5>

        
     

      </div>  <!-- cierre modal body -->
      <div class="modal-footer">

        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="destroy_all" class="btn btn-danger" value="destroy_all">
              Borrar</button>  

      </div>
      </form>
               


    </div>
  </div>
</div>


<!-- cierre modal editar -->




          </div>




    </div>
   



  <div class="card mb-3 separacionpequena" >
       

        <div class="card-body">

          <div class="table-responsive">

            <table class="table table-bordered table-sm table-hover" id="dataTable" width="100%" cellspacing="0"  >
             
              <thead>
                <tr>
                  
                  <th>Solicitud:</th>
                  <th>Estudiante:</th>
                  
                  
                  <th>Solicita - Estatus / Imprimir:</th>

                  <th >Nota:</th>
               
                  <th>Eliminar:</th>                
                  
                  
                  
                </tr>
              </thead>
                          
              
              <tbody>

                 <?php do{?>   <!--  va generarme tantas filas como datos tenga esta BD -->

                <tr>

              

                  





    <td class="align-middle" align="center" >
      
Nº: <b><?php
    echo $i;
    $i++;    
  ?></b> <br>



  <span style="color:#0DDB45; font-weight: bold; "> <?php
   
                   $source = $row_datos_doc['fecha_soli'];  
          $date = new DateTime($source);
          echo $date->format('d/m/y'); 
                   ?><br><?php echo $date->format('g:i:s a'); ?></span>


    </td>


        <td class="align-middle" align="center">
      

<?php echo $row_datos_doc['apellidos_estu'];  ?> <br> <?php echo $row_datos_doc['nombre_estu'];  ?>


    </td>










        <td class="align-middle" align="center">
      



<?php

include("../conectar.php");  

$id_del_estuXXXAAA = $row_datos_doc['id_estud'];




$query_estatus = "SELECT * FROM documentos_solicitados where id_estud = '$id_del_estuXXXAAA' LIMIT 1 ";

$resultquery_estatus = mysqli_query($enlace,$query_estatus);
$fila_query_estatus = mysqli_fetch_array($resultquery_estatus);                   

$datos_estu = $fila_query_estatus["status_estu"];



if ($datos_estu >= '0') {

    if ($datos_estu == '0') {
      $estatus_estu = " ' Solicitado ' ";
    }

    if ($datos_estu == '1') {
      $estatus_estu = " ' En Proceso '";
    }

    if ($datos_estu == '5') {
      $estatus_estu = " ' Impreso ' ";
    }

    }

else {

 $estatus_estu = ".";  }




$datos_ret = $fila_query_estatus["status_ret"];


if ($datos_ret >= '0') {

    if ($datos_ret == '0') {
      $estatus_ret = " ' Solicitado ' ";
    }

    if ($datos_ret == '1') {
      $estatus_ret = " ' En Proceso ' ";
    }

    if ($datos_ret == '5') {
      $estatus_ret = " ' Impreso ' ";
    }

    }

else  {

 $estatus_ret = ".";  }


$datos_ins = $fila_query_estatus["status_ins"];


if ($datos_ins >= '0') {

    if ($datos_ins == '0') {
      $estatus_ins = " ' Solicitado ' ";
    }

    if ($datos_ins == '1') {
      $estatus_ins = " ' En Proceso ' ";
    }

    if ($datos_ins == '5') {
      $estatus_ins = " ' Impreso ' ";
    }

    }

else  {

 $estatus_ins = ".";  }


$datos_acep = $fila_query_estatus["status_acep"];


if ($datos_acep >= '0') {

    if ($datos_acep == '0') {
      $estatus_acep = " ' Solicitado ' ";
    }

    if ($datos_acep == '1') {
      $estatus_acep = " ' En Proceso ' ";
    }

    if ($datos_acep == '5') {
      $estatus_acep = " ' Impreso ' ";
    }

    }

else  {

 $estatus_acep = ".";  }

mysqli_close($enlace); 

?>






<div class="form-row mb-2">



                <div class="col-lg-6"> <form target="_blank" action="zzz_impresiones/imp_const_estu.php" method="post">



<span data-toggle="tooltip" data-placement="top" title="Cambiar estado">
                 <button type="button" class="btn btn-success btn-sm" style="width:165px;" data-toggle="modal" data-target="#estudio<?php echo $row_datos_doc['id_estud']; ?>"
                  <?php if ($estatus_estu == " ' Impreso ' " or $estatus_estu == "."){ ?> disabled <?php   } ?> >
                                            <!-- este ultimo identifica cual modal abrir -->

                                        Estudio: <?php echo $estatus_estu;?>  
                 </button></span>



                
        
        <input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_doc['id_estud']; ?>">
        
 <span data-toggle="tooltip" data-placement="top" title="Constancia de estudios">
                 <button type="submit" name="print_estu" class="btn btn-outline-warning btn-sm" >
                                            <i class="fas fa-print fa-lg"></i>  
                 </button></span>
                 </form>



                </div>



                <!-- ini modal selecc -->

<div class="modal fade" id="estudio<?php echo $row_datos_doc['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true"  >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLabel">
        <i class="fas fa-info fa-lg"></i> &nbsp;¡Cambiar Estado!</h5>

        <button type="button" class="close"  data-dismiss="modal" aria-label="Close" >

          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body"> 

        


        <input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_doc['id_estud']; ?>">
     

      </div>  <!-- cierre modal body -->
      <div class="modal-footer">

        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="cambiar_estudio" class="btn btn-primary" value="<?php echo $row_datos_doc['id_estud']; ?>">
              Cambiar</button>  

      </div>
      </form>
               


    </div>
  </div>
</div>


<!-- cierre modal editar -->









                <div class="col-lg-6"><form target="_blank" action="zzz_impresiones/imp_const_ret.php" method="post">

<span data-toggle="tooltip" data-placement="top" title="Cambiar estado">
                 <button type="button" class="btn btn-danger btn-sm" style="width:165px;" data-toggle="modal" data-target="#retiro<?php echo $row_datos_doc['id_estud']; ?>"
                  <?php if ($estatus_ret == " ' Impreso ' " or $estatus_ret == "."){ ?> disabled <?php   } ?> >
                                            <!-- este ultimo identifica cual modal abrir -->

                                        Retiro: <?php echo $estatus_ret;?> 
                 </button></span>


                  
                 

                    <input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_doc['id_estud']; ?>">
  

 <span data-toggle="tooltip" data-placement="top" title="Constancia de retiro">
                 <button type="submit" name="print_ret" class="btn btn-outline-warning btn-sm" >
                                            <i class="fas fa-print fa-lg"></i>
                 </button></span>
                 </form>



                </div>






                  <!-- ini modal selecc -->

<div class="modal fade" id="retiro<?php echo $row_datos_doc['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true"  >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">
        <i class="fas fa-info fa-lg"></i> &nbsp;¡Cambiar Estado!</h5>

        <button type="button" class="close"  data-dismiss="modal" aria-label="Close" >

          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body"> 

        


        <input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_doc['id_estud']; ?>">
     

      </div>  <!-- cierre modal body -->
      <div class="modal-footer">

        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="cambiar_retiro" class="btn btn-primary" value="<?php echo $row_datos_doc['id_estud']; ?>">
              Cambiar</button> 

      </div>
      </form>
               


    </div>
  </div>
</div>


<!-- cierre modal editar -->


  </div>




    <div class="form-row mb-2">



                <div class="col-lg-6"><form target="_blank" action="zzz_impresiones/imp_const_ins.php" method="post">


<span data-toggle="tooltip" data-placement="top" title="Cambiar estado">
                 <button type="button" class="btn btn-info btn-sm" style="width:165px;" data-toggle="modal" data-target="#inscripcion<?php echo $row_datos_doc['id_estud']; ?>"
                  <?php if ($estatus_ins == " ' Impreso ' " or $estatus_ins == "."){ ?> disabled <?php   } ?> >
                                            <!-- este ultimo identifica cual modal abrir -->

                                         Inscripción: <?php echo $estatus_ins;?> 
                 </button></span>

                  
                 

                    <input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_doc['id_estud']; ?>">
      

<span data-toggle="tooltip" data-placement="top" title="Constancia de inscripción">
                 <button type="submit" name="print_ins" class="btn btn-outline-warning btn-sm" >
                                            <i class="fas fa-print fa-lg"></i>
                 </button></span>
                 </form>

                </div>






                  <!-- ini modal selecc -->

<div class="modal fade" id="inscripcion<?php echo $row_datos_doc['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true"  >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel">
        <i class="fas fa-info fa-lg"></i> &nbsp;¡Cambiar Estado!</h5>

        <button type="button" class="close"  data-dismiss="modal" aria-label="Close" >

          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body"> 

        


        <input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_doc['id_estud']; ?>">
     

      </div>  <!-- cierre modal body -->
      <div class="modal-footer">

        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="cambiar_inscripcion" class="btn btn-primary" value="<?php echo $row_datos_doc['id_estud']; ?>">
              Cambiar</button> 

      </div>
      </form>
               


    </div>
  </div>
</div>


<!-- cierre modal editar -->








                <div class="col-lg-6"> <form target="_blank" action="zzz_impresiones/imp_const_acep.php" method="post">


<span data-toggle="tooltip" data-placement="top" title="Cambiar estado">
                 <button type="button" class="btn btn-secondary btn-sm" style="width:165px;"  data-toggle="modal" data-target="#aceptacion<?php echo $row_datos_doc['id_estud']; ?>"
                  <?php if ($estatus_acep == " ' Impreso ' " or $estatus_acep == "."){ ?> disabled <?php   } ?> >
                                            <!-- este ultimo identifica cual modal abrir -->

                                        Aceptación: <?php echo $estatus_acep;?>
                 </button></span>


                 
                

                    <input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_doc['id_estud']; ?>">
     

<span data-toggle="tooltip" data-placement="top" title="Constancia de aceptación">
                 <button type="submit" name="print_acep" class="btn btn-outline-warning btn-sm" >
                                            <i class="fas fa-print fa-lg"></i>
                 </button></span>
                 </form>



                 <!-- ini modal selecc -->

<div class="modal fade" id="aceptacion<?php echo $row_datos_doc['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true"  >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-secondary" id="exampleModalLabel">
        <i class="fas fa-info fa-lg"></i> &nbsp;¡Cambiar Estado!</h5>

        <button type="button" class="close"  data-dismiss="modal" aria-label="Close" >

          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body"> 

        


        <input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_doc['id_estud']; ?>">
     

      </div>  <!-- cierre modal body -->
      <div class="modal-footer">

        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="cambiar_aceptacion" class="btn btn-primary" value="<?php echo $row_datos_doc['id_estud']; ?>">
              Cambiar</button> 

      </div>
      </form>
               


    </div>
  </div>
</div>


<!-- cierre modal editar -->







                </div>


  </div>













    </td>

    


        <td class="align-middle" align="center" width="15%">  

        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled><?php echo $fila_query_estatus["nota_soli"]; ?></textarea> 




    </td>





        <td class="align-middle" align="center">
      
                       


                 <button type="submit" name="eliminar" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#eliminar<?php echo $row_datos_doc['id_estud']; ?>" >
                                            <i class="far fa-trash-alt fa-lg"></i>
                 </button>
                 




                  <!-- ini modal selecc -->

<div class="modal fade" id="eliminar<?php echo $row_datos_doc['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true"  >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">
        <i class="fas fa-info fa-lg"></i> &nbsp;¡Atención!</h5>

        <button type="button" class="close"  data-dismiss="modal" aria-label="Close" >

          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post">
      <div class="modal-body"> 

        <span>Desea eliminar el registro de solicitud de documentos para: <b><?php echo $row_datos_doc['nombre_estu']; ?></b> ? </span>


        <input type="hidden" id="id_estu"   name="id_estu"  value="<?php echo $row_datos_doc['id_estud']; ?>">
     

      </div>  <!-- cierre modal body -->
      <div class="modal-footer">

        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="eliminar_registro" class="btn btn-danger" value="<?php echo $row_datos_doc['id_estud']; ?>">
              Eliminar</button>  

      </div>
      </form>
               


    </div>
  </div>
</div>


<!-- cierre modal editar -->



    </td>









                </tr>
                


                 <?php } while ($row_datos_doc = mysqli_fetch_array($datos_doc)); ?>   <!--  -->

                
              </tbody>

            </table>

          </div> <!-- cierre tabla responsiva -->

        </div>  <!-- cierre card body -->

       

     <div class="card-footer text-muted"><b>Info:</b> En esta página puede ver y consultar las diferentes solicitudes, imprimirlas de forma rápida y cambiar el estatus de las solicitudes que han sido solicitadas.</div> 

        
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
