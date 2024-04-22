<?php

		if (!$_POST['nombres'])      // verifica que no este vacío
		{   $errorZ .= "- Nombre representante requerido. "; }

		if (strlen($_POST['nombres']) >40 )  // no sea mayor a 40 caracteres
		{   $errorZ .= "- Nombre representante invalido. "; }

		if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['nombres']) ) )  // comprueba que sean letras
		{   $errorZ .= "- Nombre representante no valido. "; }


			if (!$_POST['apellidos'])      // verifica que no este vacío
			{   $errorZ .= "- Apellido representante requerido. "; }

			if (strlen($_POST['apellidos']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Apellido representante invalido. "; }

			if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['apellidos']) ) ) // comprueba que sean letras
      		{   $errorZ .= "- Apellido representante no valido. "; }


		if (!$_POST['cedula'])  // verifica que no este vacío el campo cedula
		{  $errorZ .= "- Cedula representante requerida. "; }

		if (strlen($_POST['cedula']) >9 )  // verifica que el campo cedula no sea mayor a 9 caracteres
		{  $errorZ .= "- Cedula representante invalida. "; }

		if(!is_numeric($_POST['cedula']) ) // verifica que sean solo números
		{  $errorZ .= "- Cedula representante no valida o con espacios. "; }


			if (!$_POST['telefono1'])      // verifica que no este vacío
			{   $errorZ .= "- Teléfono principal representante requerido. "; }

			if (strlen($_POST['telefono1']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Teléfono principal representante invalido. "; }

			if(!is_numeric($_POST['telefono1']) ) // verifica que sean solo números
			{  $errorZ .= "- Teléfono principal representante no valido. "; }


					    

if (!$_POST["email"] == "")
{
			if (strlen($_POST['email']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Email invalido. "; }

			if (!filter_var( ($_POST['email']), FILTER_VALIDATE_EMAIL)) // verifica un formato correcto de email
			{  $errorZ .= "- Email no valido. "; }
}

		




/*  del representado 1  */

if (!$_POST['nombres_est1'])      // verifica que no este vacío
		{   $errorZ .= "- Nombre representado 1, requerido. "; }

		if (strlen($_POST['nombres_est1']) >40 )  // no sea mayor a 40 caracteres
		{   $errorZ .= "- Nombre representado 1, invalido. "; }

		if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['nombres_est1']) ) )  // comprueba que sean letras
		{   $errorZ .= "- Nombre representado 1, no valido. "; }




			if (!$_POST['apellidos_est1'])      // verifica que no este vacío
			{   $errorZ .= "- Apellido representado 1, requerido. "; }

			if (strlen($_POST['apellidos_est1']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Apellido representado 1, invalido. "; }

			if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['apellidos_est1']) ) ) // comprueba que sean letras
      		{   $errorZ .= "- Apellido representado 1, no valido. "; }


if ($_POST['cedula_est1'])  // si tiene algo la cedula
		{   

		if (strlen($_POST['cedula_est1']) >13 )  // verifica que el campo cedula no sea mayor a 9 caracteres
		{  $errorZ .= "- Cedula representado 1, invalida. "; }

		if(!is_numeric($_POST['cedula_est1']) ) // verifica que sean solo números
		{  $errorZ .= "- Cedula representado 1, no valida o con espacios. "; }



		if ($_POST['cedula'] == $_POST['cedula_est1']) {
			
			{  $errorZ .= "- Documento de identidad del Representante, debe ser diferente al del Est. 1. "; }
		}


		

		$queryEE11 = "SELECT ci_estu FROM reg_estudiantes WHERE ci_estu ='".mysqli_real_escape_string($enlace,$_POST['cedula_est1'])."' LIMIT 1";
		$resultEE11 = mysqli_query($enlace,$queryEE11);

							
				if (mysqli_num_rows($resultEE11)>0)
				{
				$errorZ.="- Cedula del representado 1, fue anteriormente registrada. ";
				
				}
}





if (!$_POST['expediente_est1'])  // verifica que no este vacío el campo cedula escolar
		{  $errorZ .= "- Expediente representado 1, requerido. "; }

		if (strlen($_POST['expediente_est1']) >13 )  // verifica que el campo cedula no sea mayor a 9 caracteres
		{  $errorZ .= "- Expediente representado 1, invalido. "; }

		if(!is_numeric($_POST['expediente_est1']) ) // verifica que sean solo números
		{  $errorZ .= "- Expediente representado 1, no valido o con espacios. "; }

else { 
		

		$queryEEexp11 = "SELECT estu_expediente FROM reg_estudiantes WHERE estu_expediente ='".mysqli_real_escape_string($enlace,$_POST['expediente_est1'])."' LIMIT 1";
		$resultEEexp11 = mysqli_query($enlace,$queryEEexp11);

							
				if (mysqli_num_rows($resultEEexp11)>0)
				{
				$errorZ.="- Expediente del representado 1, fue anteriormente registrado. ";
				
				}
}



/*    */  








/*  del representado 2  */

if($number_alum >= '2' ) {

if (!$_POST['nombres_est2'])      // verifica que no este vacío
		{   $errorZ .= "- Nombre representado 2, requerido. "; }

		if (strlen($_POST['nombres_est2']) >40 )  // no sea mayor a 40 caracteres
		{   $errorZ .= "- Nombre representado 2, invalido. "; }

		if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['nombres_est2']) ) )  // comprueba que sean letras
		{   $errorZ .= "- Nombre representado 2, no valido. "; }





			if (!$_POST['apellidos_est2'])      // verifica que no este vacío
			{   $errorZ .= "- Apellido representado 2, requerido. "; }

			if (strlen($_POST['apellidos_est2']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Apellido representado 2, invalido. "; }

			if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['apellidos_est2']) ) ) // comprueba que sean letras
      		{   $errorZ .= "- Apellido representado 2, no valido. "; }


if ($_POST['cedula_est2'])  // si tiene algo la cedula
		{   

		if (strlen($_POST['cedula_est2']) >13 )  // verifica que el campo cedula no sea mayor a 9 caracteres
		{  $errorZ .= "- Cedula representado 2, invalida. "; }

		if(!is_numeric($_POST['cedula_est2']) ) // verifica que sean solo números
		{  $errorZ .= "- Cedula representado 2, no valida o con espacios. "; }



		if ($_POST['cedula_est1'] == $_POST['cedula_est2']) {
			
			{  $errorZ .= "- Documento de identidad del Est. 1, debe ser diferente al del Est. 2. "; }
		}


		if ($_POST['cedula'] == $_POST['cedula_est2']) {
			
			{  $errorZ .= "- Documento de identidad del Representante, debe ser diferente al del Est. 2. "; }
		}


		

		$queryEE22 = "SELECT ci_estu FROM reg_estudiantes WHERE ci_estu ='".mysqli_real_escape_string($enlace,$_POST['cedula_est2'])."' LIMIT 1";
		$resultEE22 = mysqli_query($enlace,$queryEE22);

							
				if (mysqli_num_rows($resultEE22)>0)
				{
				$errorZ.="- Cedula del representado 2, fue anteriormente registrada. ";
				
				}
          }





if (!$_POST['expediente_est2'])  // verifica que no este vacío el campo cedula escolar
		{  $errorZ .= "- Expediente representado 2, requerido. "; }

		if (strlen($_POST['expediente_est2']) >13 )  // verifica que el campo cedula no sea mayor a 9 caracteres
		{  $errorZ .= "- Expediente representado 2, invalido. "; }

		if(!is_numeric($_POST['expediente_est2']) ) // verifica que sean solo números
		{  $errorZ .= "- Expediente representado 2, no valido o con espacios. "; }



		if ($_POST['expediente_est1'] == $_POST['expediente_est2']) {
			
			{  $errorZ .= "- Exp. del Est. 1, debe ser diferente al exp. del Est. 2. "; }
		}




else { 
		

		$queryEEexp22 = "SELECT estu_expediente FROM reg_estudiantes WHERE estu_expediente ='".mysqli_real_escape_string($enlace,$_POST['expediente_est2'])."' LIMIT 1";
		$resultEEexp22 = mysqli_query($enlace,$queryEEexp22);

							
				if (mysqli_num_rows($resultEEexp22)>0)
				{
				$errorZ.="- Expediente del representado 2, fue anteriormente registrado. ";
				
				}
}



 }










/*  del representado 3  */

if($number_alum >= '3' ) {

if (!$_POST['nombres_est3'])      // verifica que no este vacío
		{   $errorZ .= "- Nombre representado 3, requerido. "; }

		if (strlen($_POST['nombres_est3']) >40 )  // no sea mayor a 40 caracteres
		{   $errorZ .= "- Nombre representado 3, invalido. "; }

		if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['nombres_est3']) ) )  // comprueba que sean letras
		{   $errorZ .= "- Nombre representado 3, no valido. "; }



			if (!$_POST['apellidos_est3'])      // verifica que no este vacío
			{   $errorZ .= "- Apellido representado 3, requerido. "; }

			if (strlen($_POST['apellidos_est3']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Apellido representado 3, invalido. "; }

			if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['apellidos_est3']) ) ) // comprueba que sean letras
      		{   $errorZ .= "- Apellido representado 3, no valido. "; }


if ($_POST['cedula_est3'])  // si tiene algo la cedula
		{   

		if (strlen($_POST['cedula_est3']) >13 )  // verifica que el campo cedula no sea mayor a 9 caracteres
		{  $errorZ .= "- Cedula representado 3, invalida. "; }

		if(!is_numeric($_POST['cedula_est3']) ) // verifica que sean solo números
		{  $errorZ .= "- Cedula representado 3, no valida o con espacios. "; }



		if ($_POST['cedula_est2'] == $_POST['cedula_est3']) {
			
			{  $errorZ .= "- Documento de identidad del Est. 2, debe ser diferente al del Est. 3. "; }
		}


		if ($_POST['cedula_est1'] == $_POST['cedula_est3']) {
			
			{  $errorZ .= "- Documento de identidad del Est. 1, debe ser diferente al del Est. 3. "; }
		}



		if ($_POST['cedula'] == $_POST['cedula_est3']) {
			
			{  $errorZ .= "- Documento de identidad del Representante, debe ser diferente al del Est. 3. "; }
		}


		

		$queryEE33 = "SELECT ci_estu FROM reg_estudiantes WHERE ci_estu ='".mysqli_real_escape_string($enlace,$_POST['cedula_est3'])."' LIMIT 1";
		$resultEE33 = mysqli_query($enlace,$queryEE33);

							
				if (mysqli_num_rows($resultEE33)>0)
				{
				$errorZ.="- Cedula del representado 3, fue anteriormente registrada. ";
				
				}
          }





if (!$_POST['expediente_est3'])  // verifica que no este vacío el campo cedula escolar
		{  $errorZ .= "- Expediente representado 3, requerido. "; }

		if (strlen($_POST['expediente_est3']) >13 )  // verifica que el campo cedula no sea mayor a 9 caracteres
		{  $errorZ .= "- Expediente representado 3, invalido. "; }

		if(!is_numeric($_POST['expediente_est3']) ) // verifica que sean solo números
		{  $errorZ .= "- Expediente representado 3, no valido o con espacios. "; }



		if ($_POST['expediente_est1'] == $_POST['expediente_est3']) {
			
			{  $errorZ .= "- Exp. del Est. 1, debe ser diferente al exp. del Est. 3. "; }
		}


		if ($_POST['expediente_est2'] == $_POST['expediente_est3']) {
			
			{  $errorZ .= "- Exp. del Est. 2, debe ser diferente al exp. del Est. 3. "; }
		}



else { 
		

		$queryEEexp33 = "SELECT estu_expediente FROM reg_estudiantes WHERE estu_expediente ='".mysqli_real_escape_string($enlace,$_POST['expediente_est3'])."' LIMIT 1";
		$resultEEexp33 = mysqli_query($enlace,$queryEEexp33);

							
				if (mysqli_num_rows($resultEEexp33)>0)
				{
				$errorZ.="- Expediente del representado 3, fue anteriormente registrado. ";
				
				}
}









 }







?>