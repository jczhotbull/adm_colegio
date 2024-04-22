<?php



$query = "SELECT * FROM reg_estudiantes
LEFT JOIN reg_pagos ON reg_estudiantes.id_estud = reg_pagos.id_del_estud 

 where  reg_pagos.recibo_pago_insc LIKE '%".$consul."%' or reg_pagos.recibo_1er_pago LIKE '%".$consul."%'
			                                     or reg_pagos.recibo_2do_pago LIKE '%".$consul."%'
			                                     or reg_pagos.recibo_3er_pago LIKE '%".$consul."%'
			                                     or reg_pagos.recibo_4to_pago LIKE '%".$consul."%'
			                                     or reg_pagos.recibo_5to_pago LIKE '%".$consul."%'
			                                     or reg_pagos.recibo_6to_pago LIKE '%".$consul."%'
			                                     or reg_pagos.recibo_7mo_pago LIKE '%".$consul."%'
			                                     or reg_pagos.recibo_8vo_pago LIKE '%".$consul."%'
			                                     or reg_pagos.recibo_9no_pago LIKE '%".$consul."%'
			                                     or reg_pagos.recibo_10m_pago LIKE '%".$consul."%'
			                                     or reg_pagos.recibo_11o_pago LIKE '%".$consul."%'
			                                     or reg_pagos.recibo_12o_pago LIKE '%".$consul."%'
			                                     or reg_pagos.recibo_abono_ins LIKE '%".$consul."%'

" ;


$datos_control = mysqli_query($enlace, $query) or die(mysqli_error());
$row_datos_control = mysqli_fetch_array($datos_control); 
$totalRows_control = mysqli_num_rows($datos_control); 



mysqli_close($enlace);





?>


 