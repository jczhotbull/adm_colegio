
<!-- The Modal -->

<div class="modal fade" id="mod_logo_doc<?php echo $row_datos_plantilla['id_per']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Ajuste la nueva foto dentro del margen y haga clic en recortar.</h5>
          <!--     <button type="button" class="close" data-dismiss="modal" aria-label="Close">  
          <span aria-hidden="true">&times;</span>
        </button>  -->
      </div>

      <div class="modal-body">
      	<div class="form-row">
      		<div class="col-md-12">

      			<div class="col-md-12 mt-1 card border-info divXXheight">

      				<div class="mt-2">
						  <div id="image_demo_doc<?php echo $row_datos_plantilla['id_per']; ?>"></div>
  					</div>  						

  					
      				 <button class="btn btn-success crop_image2_doc<?php echo $row_datos_plantilla['id_per']; ?>" id="crop_image2_doc<?php echo $row_datos_plantilla['id_per']; ?>">Recortar</button>

      				 <div class="form-row ">  <!-- mensaje q aprece -->

					 <div class="content_doc<?php echo $row_datos_plantilla['id_per']; ?> mt-1 mb-1 col-md-12 text-center" style="display:none">

					 <b class="text-info"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>

					 </div>


					 

					 <div class="content2_doc<?php echo $row_datos_plantilla['id_per']; ?> mt-1 mb-1 col-md-12 text-center" style="display:none">

<b class="text-success"> <i class="fas fa-check"></i>&nbsp;&nbsp;Imagen cargada</b>; click en <b class="text-primary">"Actualizar"</b> para confirmar.

					</div>






					 </div>  <!-- cierre form-row -->
      				   				

      			</div>


      		</div>
        </div>
      </div>


       <div class="modal-footer">

      	<form method="POST"  name="actualizar_fotoX"> 
      	

   <input   type="hidden" id="id_del_perUU" name="id_del_perUU"
    value="<?php echo $row_datos_plantilla['id_per']; ?>">  

   <input   type="hidden" id="update_ciX" name="update_ciX"
    value="<?php echo $row_datos_plantilla['ci_per']; ?>">  
   
        
      <button type="submit" name="update_logoX" id="update_logoX_doc<?php echo $row_datos_plantilla['id_per']; ?>" class="btn btn-primary"
      value="<?php echo $row_datos_plantilla['id_per']; ?>" disabled >Actualizar</button>   <!-- disabled --> 

      <button type="submit" name="cancelXX" id="cancelXX" class="btn btn-secondary" >Cancelar</button> 

         

        </form>


         

      </div>

     

    </div>
  </div>
</div>

<!-- cierre The Modal -->



<script type="text/javascript">



$(document).ready(function() {	
			
			   
			    setTimeout(function() {
			        $(".content_doc<?php echo $row_datos_plantilla['id_per']; ?>").hide();
			    }, 0);                     // este numero dice que tan rapido lo esconde....


			    setTimeout(function() {
			        $(".content2_doc<?php echo $row_datos_plantilla['id_per']; ?>").hide();
			    }, 0);                     // este numero dice que tan rapido lo esconde....


			    $('#crop_image2_doc<?php echo $row_datos_plantilla['id_per']; ?>').click(function() {
			    	this.disabled = true;
			    	$(".content_doc<?php echo $row_datos_plantilla['id_per']; ?>").show();
			    				        
			        setTimeout(function() {
			            $(".content_doc<?php echo $row_datos_plantilla['id_per']; ?>").fadeOut(6500);
			      
			        }, 7500);
			        

			    });
			});












function fileValidation_doc<?php echo $row_datos_plantilla['id_per']; ?>(){
    var fileInput = document.getElementById('upload_image_doc<?php echo $row_datos_plantilla['id_per']; ?>');
    var filePath = fileInput.value;
    var fileSize = fileInput.files[0].size;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    
    if(!allowedExtensions.exec(filePath)){
    	swal("Alerta!", "Archivo cargado no valido!", "info");
        
        fileInput.value = '';
        return false;  }

    if(fileSize > 10485760){
    	swal("Alerta!", "Tamaño de archivo no valido!", "info");      
       return false; 
    }
    


    else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            

            reader.onload = function (event) {

            	$('.image_demo_doc<?php echo $row_datos_plantilla['id_per']; ?>').addClass('ready');

            	$('#mod_logo_doc<?php echo $row_datos_plantilla['id_per']; ?>').modal('show');

            	rawImg = event.target.result;

            }

            	reader.readAsDataURL(fileInput.files[0]);

              }
					        else {
						        swal("Sorry - you're browser doesn't support the FileReader API");
						    }
						}

	}




$image_crop_doc<?php echo $row_datos_plantilla['id_per']; ?> = $('#image_demo_doc<?php echo $row_datos_plantilla['id_per']; ?>').croppie({
	
    enableExif: true,
    viewport: {
        width: 600,
        height: 450,
        type: 'square'
    },
    boundary: {
        width: 725,
        height: 575
    },
    
});


		     



$('#mod_logo_doc<?php echo $row_datos_plantilla['id_per']; ?>').on('shown.bs.modal', function(){
							// alert('Shown pop');
							$image_crop_doc<?php echo $row_datos_plantilla['id_per']; ?>.croppie('bind', {
				        		url: rawImg
				        	}).then(function(){
				        		console.log('jQuery bind complete');
				        	});
						});







$('.crop_image2_doc<?php echo $row_datos_plantilla['id_per']; ?>').click(function(event){	

    $image_crop_doc<?php echo $row_datos_plantilla['id_per']; ?>.croppie('result', {
      type: 'canvas',
	  format: 'png',
	 size: 'viewport'
    }).then(function(response){
      $.ajax({
        url:"../0 Croppie/upload_ci_updt.php?namexx=<?php echo $nnn['ci']; ?>",
        type: "POST",
        data:{"image2": response},     
        success:function(data)
        {    

				 						$('#uploaded_image_doc<?php echo $row_datos_plantilla['id_per']; ?>').html(data);

				 						$(".content_doc<?php echo $row_datos_plantilla['id_per']; ?>").hide();

				 						$(".content2_doc<?php echo $row_datos_plantilla['id_per']; ?>").show();
				 					
				 						document.getElementById("update_logoX_doc<?php echo $row_datos_plantilla['id_per']; ?>").disabled = false;	 

        }
      });


    })
  });

</script>	




