<?php 

                                 include("../conectar.php");

              $querymod2 = "SELECT * FROM plantilla_turnos WHERE nombre_turno != '.' ORDER BY nombre_turno ASC";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_turno']; ?>"><?php echo $row_datos_mod2['nombre_turno'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);  

                                                                 
                         ?>  