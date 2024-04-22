
<!-- The Modal -->

<div class="modal fade" id="mod_logo<?php echo $row_datos_estudiantes['id_estud']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Ajuste la nueva foto del estudiante y haga clic en recortar.</h5>
       <!--     <button type="button" class="close" data-dismiss="modal" aria-label="Close">  
          <span aria-hidden="true">&times;</span>
        </button>  -->
      </div>

      <div class="modal-body">
      	<div class="form-row">
      		<div class="col-md-12">

      			<div class="col-md-12 mt-1 card border-info divXXheight">

      				<div class="mt-2">
						  <div id="image_demo<?php echo $row_datos_estudiantes['id_estud']; ?>"></div>
  					</div>  						

  					
      				 <button class="btn btn-success crop_image2<?php echo $row_datos_estudiantes['id_estud']; ?>" id="crop_image2<?php echo $row_datos_estudiantes['id_estud']; ?>">Recortar</button>

      				 <div class="form-row ">  <!-- mensaje q aprece -->

					 <div class="content<?php echo $row_datos_estudiantes['id_estud']; ?> mt-1 mb-1 col-md-12 text-center" style="display:none">

					 <b class="text-info"> <i class="fas fa-spinner fa-lg fa-spin"></i>&nbsp;&nbsp;Procesando favor esperar.</b>

					 </div>


					 

					 <div class="content2<?php echo $row_datos_estudiantes['id_estud']; ?> mt-1 mb-1 col-md-12 text-center" style="display:none">

<b class="text-success"> <i class="fas fa-check"></i>&nbsp;&nbsp;Imagen cargada</b>; click en <b class="text-primary">"Actualizar"</b> para confirmar.

					</div>






					 </div>  <!-- cierre form-row -->
      				   				

      			</div>


      		</div>
        </div>
      </div>


       <div class="modal-footer">

      	<form method="POST"  name="actualizar_fotoX"> 
      	

   <input   type="hidden" id="id_del_est_UU" name="id_del_est_UU"
    value="<?php echo $row_datos_estudiantes['id_estud']; ?>"> 


       <input   type="hidden" id="exp_del_est_UU" name="exp_del_est_UU"
    value="<?php echo $row_datos_estudiantes['estu_expediente']; ?>"> 


    <input   type="hidden" id="id_del_repreX" name="id_del_repreX"
    value="<?php echo $row_datos_estudiantes['id_repre']; ?>">  


   
        
      <button type="submit" name="update_logoX" id="update_logoX<?php echo $row_datos_estudiantes['id_estud']; ?>" class="btn btn-primary"
      value="<?php echo $row_datos_estudiantes['id_estud']; ?>" disabled >Actualizar</button>   <!-- disabled --> 

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
			        $(".content<?php echo $row_datos_estudiantes['id_estud']; ?>").hide();
			    }, 0);                     // este numero dice que tan rapido lo esconde....


			    setTimeout(function() {
			        $(".content2<?php echo $row_datos_estudiantes['id_estud']; ?>").hide();
			    }, 0);                     // este numero dice que tan rapido lo esconde....


			    $('#crop_image2<?php echo $row_datos_estudiantes['id_estud']; ?>').click(function() {
			    	this.disabled = true;
			    	$(".content<?php echo $row_datos_estudiantes['id_estud']; ?>").show();
			    				        
			        setTimeout(function() {
			            $(".content<?php echo $row_datos_estudiantes['id_estud']; ?>").fadeOut(6500);
			      
			        }, 7500);
			        

			    });
			});












function fileValidation<?php echo $row_datos_estudiantes['id_estud']; ?>(){
    var fileInput = document.getElementById('upload_image<?php echo $row_datos_estudiantes['id_estud']; ?>');
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

            	$('.image_demo<?php echo $row_datos_estudiantes['id_estud']; ?>').addClass('ready');

            	$('#mod_logo<?php echo $row_datos_estudiantes['id_estud']; ?>').modal('show');

            	rawImg = event.target.result;

            }

            	reader.readAsDataURL(fileInput.files[0]);

              }
					        else {
						        swal("Sorry - you're browser doesn't support the FileReader API");
						    }
						}

	}




$image_crop<?php echo $row_datos_estudiantes['id_estud']; ?> = $('#image_demo<?php echo $row_datos_estudiantes['id_estud']; ?>').croppie({
	
    enableExif: true,
    viewport: {
        width: 350,
        height: 450,
        type: 'square'
    },
    boundary: {
        width: 450,
        height: 550
    },
    
});


		     



$('#mod_logo<?php echo $row_datos_estudiantes['id_estud']; ?>').on('shown.bs.modal', function(){
							// alert('Shown pop');
							$image_crop<?php echo $row_datos_estudiantes['id_estud']; ?>.croppie('bind', {
				        		url: rawImg
				        	}).then(function(){
				        		console.log('jQuery bind complete');
				        	});
						});







$('.crop_image2<?php echo $row_datos_estudiantes['id_estud']; ?>').click(function(event){	

    $image_crop<?php echo $row_datos_estudiantes['id_estud']; ?>.croppie('result', {
      type: 'canvas',
	  format: 'png',
	 size: 'viewport'
    }).then(function(response){
      $.ajax({
        url:"../0 Croppie/upload_estud_updt.php?namexx=<?php echo $nnn['ci']; ?>",
        type: "POST",
        data:{"image1": response},     
        success:function(data)
        {    

				 						$('#uploaded_image<?php echo $row_datos_estudiantes['id_estud']; ?>').html(data);

				 						$(".content<?php echo $row_datos_estudiantes['id_estud']; ?>").hide();

				 						$(".content2<?php echo $row_datos_estudiantes['id_estud']; ?>").show();
				 					
				 						document.getElementById("update_logoX<?php echo $row_datos_estudiantes['id_estud']; ?>").disabled = false;	 

        }
      });


    })
  });

</script>	




