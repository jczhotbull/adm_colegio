<?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM plantilla_areas WHERE nombre_area != '.' ORDER BY nombre_area ASC";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_area']; ?>"><?php echo $row_datos_mod2['nombre_area'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);                                              
                         ?>              