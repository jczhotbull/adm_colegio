 <?php 

                          include("../conectar.php");

              $querymod2 = "SELECT * FROM grados, divisiones
WHERE  grados.id_division = divisiones.id_division
and nombre_grados != '.' ORDER BY nombre_division ASC";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_grado']; ?>"><?php echo $row_datos_mod2['nombre_grados'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);  
                                                                 
                         ?>  