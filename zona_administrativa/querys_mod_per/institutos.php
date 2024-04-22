<?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM plantilla_instituto WHERE nombre_instituto != '.' ORDER BY nombre_instituto ASC";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_instituto']; ?>"><?php echo $row_datos_mod2['nombre_instituto'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              
                         ?>           