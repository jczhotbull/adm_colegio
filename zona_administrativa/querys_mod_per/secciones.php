<?php

                                 include("../conectar.php");

              $querymod2 = "SELECT * FROM secciones WHERE nombre_seccion != '.' ORDER BY nombre_seccion ASC";

              $datos_mod2 = mysqli_query($enlace, $querymod2) or die(mysqli_error());

              $row_datos_mod2 = mysqli_num_rows($datos_mod2);                          

                          while ($row_datos_mod2 = mysqli_fetch_assoc($datos_mod2))
                          {                            
?>
    <option value = "<?php echo $row_datos_mod2['id_seccion']; ?>"><?php echo $row_datos_mod2['nombre_seccion'];?></option>
<?php
                          }                          
                          mysqli_close($enlace);  

                                                                 
                         ?>  