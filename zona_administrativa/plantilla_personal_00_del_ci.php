
 <div data-toggle="tooltip" data-placement="top" title="Borrar Doc. Id." >

                <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal"
                 data-target="#borrar_ci<?php echo $row_datos_plantilla['id_per']; ?>"> <i class="far fa-id-card"></i></button>
        
</div>



<!-- ini modal eliminar logo -->

<div class="modal fade" id="borrar_ci<?php echo $row_datos_plantilla['id_per']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
        El documento de identidad de: <b>&nbsp;"&nbsp; <?php echo $row_datos_plantilla['nombre_per'];?> 
                                      
                             "&nbsp;</b> será eliminado. 
      </div>
      <div class="modal-footer">

  <form method="post" name="delete_logoX_doc"> 

    <input   type="hidden" id="id_del_perUU" name="id_del_perUU"
    value="<?php echo $row_datos_plantilla['id_per']; ?>">  

   <input   type="hidden" id="update_ciX" name="update_ciX"
    value="<?php echo $row_datos_plantilla['ci_per']; ?>">  



    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="submit" name="borrarRR" id="borrarRR" class="btn btn-danger" >
          Borrar</button>   <!-- coloco el id de la direccion ya que al estar en cascada con esto elimino el registro plantilla -->    

  </form>




      </div>
    </div>
  </div>
</div>

<!-- cierre modal de eliminar -->
