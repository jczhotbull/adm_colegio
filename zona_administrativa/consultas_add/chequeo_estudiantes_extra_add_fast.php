<?php

		

/*  del representado 1  */

if (!$_POST['nombres_est1'])      // verifica que no este vacío
		{   $errorZ .= "- Nombre representado, requerido. "; }

		if (strlen($_POST['nombres_est1']) >40 )  // no sea mayor a 40 caracteres
		{   $errorZ .= "- Nombre representado, invalido. "; }

		if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['nombres_est1']) ) )  // comprueba que sean letras
		{   $errorZ .= "- Nombre representado, no valido. "; }






			if (!$_POST['apellidos_est1'])      // verifica que no este vacío
			{   $errorZ .= "- Apellido representado, requerido. "; }

			if (strlen($_POST['apellidos_est1']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Apellido representado, invalido. "; }

			if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['apellidos_est1']) ) ) // comprueba que sean letras
      		{   $errorZ .= "- Apellido representado, no valido. "; }


if ($_POST['cedula_est1'])  // si tiene algo la cedula
		{   

		if (strlen($_POST['cedula_est1']) >13 )  // verifica que el campo cedula no sea mayor a 9 caracteres
		{  $errorZ .= "- Cedula del representado, invalida. "; }

		if(!is_numeric($_POST['cedula_est1']) ) // verifica que sean solo números
		{  $errorZ .= "- Cedula del representado, no valida o con espacios. "; }

		

		$queryEE11 = "SELECT ci_estu FROM reg_estudiantes WHERE ci_estu ='".mysqli_real_escape_string($enlace,$_POST['cedula_est1'])."' LIMIT 1";
		$resultEE11 = mysqli_query($enlace,$queryEE11);

							
				if (mysqli_num_rows($resultEE11)>0)
				{
				$errorZ.="- Cedula del representado, fue anteriormente registrada. ";
				
				}
}





if (!$_POST['expediente_est1'])  // verifica que no este vacío el campo cedula escolar
		{  $errorZ .= "- Expediente del representado, requerido. "; }

		if (strlen($_POST['expediente_est1']) >13 )  // verifica que el campo cedula no sea mayor a 9 caracteres
		{  $errorZ .= "- Expediente del representado, invalido. "; }

		if(!is_numeric($_POST['expediente_est1']) ) // verifica que sean solo números
		{  $errorZ .= "- Expediente del representado, no valido o con espacios. "; }

else { 
		

		$queryEEexp11 = "SELECT estu_expediente FROM reg_estudiantes WHERE estu_expediente ='".mysqli_real_escape_string($enlace,$_POST['expediente_est1'])."' LIMIT 1";
		$resultEEexp11 = mysqli_query($enlace,$queryEEexp11);

							
				if (mysqli_num_rows($resultEEexp11)>0)
				{
				$errorZ.="- Expediente del representado, fue anteriormente registrado. ";
				
				}
}


if ($_POST['plantel_pro1'])      // si tiene algo
			{   
			if (strlen($_POST['plantel_pro1']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Nombre del plantel de procedencia, invalido. "; }

			}




/*    */  








?>