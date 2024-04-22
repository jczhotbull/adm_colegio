
 <div data-toggle="tooltip" data-placement="top" title="Borrar logo." >

                <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal"
                 data-target="#borrar_logo<?php echo $row_plantel['id_plantel']; ?>"> <i class="far fa-trash-alt"></i></button>
        
</div>



<!-- ini modal eliminar logo -->

<div class="modal fade" id="borrar_logo<?php echo $row_plantel['id_plantel']; ?>" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">
        <i class="fas fa-exclamation-triangle fa-lg"></i> &nbsp;Alerta!!!</h5>

   <!--     <button type="button" class="close" data-dismiss="modal" aria-label="Close">  
          <span aria-hidden="true">&times;</span>
        </button>  -->
      </div>
      <div class="modal-body">
        El logo del plantel: <b>&nbsp;"&nbsp; <?php echo $row_plantel['nombre_plantel'];?> 
                                      
                             "&nbsp;</b> será eliminado. 
      </div>
      <div class="modal-footer">

  <form method="post" name="delete_logoX"> 

    <input type="hidden" id="update_numX" name="update_numX"
    value="<?php echo $row_plantel['codigo_plantel']; ?>">  


     <input type="hidden" id="id_plantRR" name="id_plantRR"
    value="<?php echo $row_plantel['id_plantel']; ?>">  



    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="submit" name="borrarXX" id="borrarXX" class="btn btn-danger" >
          Borrar</button>   <!-- coloco el id de la direccion ya que al estar en cascada con esto elimino el registro plantilla -->    

  </form>







      </div>
    </div>
  </div>
</div>

<!-- cierre modal de eliminar -->
