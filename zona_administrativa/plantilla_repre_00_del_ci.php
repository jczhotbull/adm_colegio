
 <div data-toggle="tooltip" data-placement="top" title="Borrar Doc. Id." >

                <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal"
                 data-target="#borrar_ci_re_<?php echo $row_datos_estudiantes['id_estud']; ?>"> <i class="far fa-id-card"></i></button>
        
</div>



<!-- ini modal eliminar logo -->

<div class="modal fade" id="borrar_ci_re_<?php echo $row_datos_estudiantes['id_estud']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
        El documento de identidad del representante: 
        <br> <b>"<?php echo $row_datos_estudiantes['apellido_repre'];?>,  <?php echo $row_datos_estudiantes['nombre_repre'];?>
                "</b> será eliminado.

      </div>
      <div class="modal-footer">

  <form method="post" name="delete_logoX_doc"> 

    <input   type="hidden" id="id_del_est_UU" name="id_del_est_UU"
    value="<?php echo $row_datos_estudiantes['id_estud']; ?>"> 

    <input   type="hidden" id="id_del_repreX" name="id_del_repreX"
    value="<?php echo $row_datos_estudiantes['id_repre']; ?>">  



    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="submit" name="borrarRR" id="borrarRR" class="btn btn-danger" >
          Borrar</button>   <!-- coloco el id de la direccion ya que al estar en cascada con esto elimino el registro plantilla -->    

  </form>




      </div>
    </div>
  </div>
</div>

<!-- cierre modal de eliminar -->
