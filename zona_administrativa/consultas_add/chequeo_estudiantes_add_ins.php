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


		if ($_POST['telefono2'])  
		{
			if (strlen($_POST['telefono2']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Teléfono adicional representante invalido. "; }

			if(!is_numeric($_POST['telefono2']) ) // verifica que sean solo números
			{  $errorZ .= "- Teléfono adicional representante no valido. "; }
		}
					    

if (!$_POST["email"] == "")
{
			if (strlen($_POST['email']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Email invalido. "; }

			if (!filter_var( ($_POST['email']), FILTER_VALIDATE_EMAIL)) // verifica un formato correcto de email
			{  $errorZ .= "- Email no valido. "; }
}

		if (!$_POST['calle'])  // verifica que no este vacío el campo 
		{  $errorZ .= "- Calle o sector requerido. "; }

		if (strlen($_POST['calle']) >150 )  // no sea mayor a 150 caracteres
		{   $errorZ .= "- Calle o sector invalido. "; }


			if (!$_POST['nombre_vi'])  // verifica que no este vacío el campo 
			{  $errorZ .= "- Nombre de la vivienda requerida. "; }

			if (strlen($_POST['nombre_vi']) >150 )  // no sea mayor a 200 caracteres
			{   $errorZ .= "- Nombre de la vivienda invalida. "; }




/*  del representado 1  */

if (!$_POST['nombres_est1'])      // verifica que no este vacío
		{   $errorZ .= "- Nombre representado 1, requerido. "; }

		if (strlen($_POST['nombres_est1']) >40 )  // no sea mayor a 40 caracteres
		{   $errorZ .= "- Nombre representado 1, invalido. "; }

		if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['nombres_est1']) ) )  // comprueba que sean letras
		{   $errorZ .= "- Nombre representado 1, no valido. "; }



		





						if (!$_POST['mod_alergias_estud_act1'])      // verifica que no este vacío
		{   $errorZ .= "- Es Alérgico a 1? del representado requerido. "; }

		if (strlen($_POST['mod_alergias_estud_act1']) >29 )  // no sea mayor a 40 caracteres
		{   $errorZ .= "- Es Alérgico a 1? del representado invalido. "; }





					if (!$_POST['mod_padecio_estud_act1'])      // verifica que no este vacío
		{   $errorZ .= "- A padecido de 1? del representado requerido. "; }

		if (strlen($_POST['mod_padecio_estud_act1']) >59 )  // no sea mayor a 40 caracteres
		{   $errorZ .= "- A padecido de 1? del representado invalido. "; }






                
    if (strlen($_POST['mod_control_med_act1']) >59 )  // no sea mayor a 40 caracteres
    {   $errorZ .= "- En control médico act1? del representado invalido. "; }





if (!$_POST["mod_email_estu_act1"] == "")
{
			if (strlen($_POST['mod_email_estu_act1']) >59 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Email Estudiante invalido. "; }

			if (!filter_var( ($_POST['mod_email_estu_act1']), FILTER_VALIDATE_EMAIL)) // verifica un formato correcto de email
			{  $errorZ .= "- Email Estudiante no valido. "; }
}




    if (strlen($_POST['v_otra_act1']) >29 )  // no sea mayor a 40 caracteres
    {   $errorZ .= "- Otra vacuna act1? del representado invalido. "; }




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


if ($_POST['plantel_pro1'])      // si tiene algo
			{   
			if (strlen($_POST['plantel_pro1']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Nombre del plantel de procedencia 1, mayor a 40 caracteres. "; }

			}


if (strlen($_POST['obs_text1']) >750 )  // verifica que el campo obs1 no sea mayor a 750 caracteres
		{  $errorZ .= "- Observaciones N°1, mayor a 750 caracteres. "; }


/*    */  








/*  del representado 2  */

if($number_alum >= '2' ) {

if (!$_POST['nombres_est2'])      // verifica que no este vacío
		{   $errorZ .= "- Nombre representado 2, requerido. "; }

		if (strlen($_POST['nombres_est2']) >40 )  // no sea mayor a 40 caracteres
		{   $errorZ .= "- Nombre representado 2, invalido. "; }

		if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['nombres_est2']) ) )  // comprueba que sean letras
		{   $errorZ .= "- Nombre representado 2, no valido. "; }



		



						if (!$_POST['mod_alergias_estud_act2'])      // verifica que no este vacío
		{   $errorZ .= "- Es Alérgico a 2? del representado requerido. "; }

		if (strlen($_POST['mod_alergias_estud_act2']) >29 )  // no sea mayor a 40 caracteres
		{   $errorZ .= "- Es Alérgico a 2? del representado invalido. "; }





					if (!$_POST['mod_padecio_estud_act2'])      // verifica que no este vacío
		{   $errorZ .= "- A padecido de 2? del representado requerido. "; }

		if (strlen($_POST['mod_padecio_estud_act2']) >59 )  // no sea mayor a 40 caracteres
		{   $errorZ .= "- A padecido de 2? del representado invalido. "; }





                
    if (strlen($_POST['mod_control_med_act2']) >59 )  // no sea mayor a 40 caracteres
    {   $errorZ .= "- En control médico act2? del representado invalido. "; }



if (!$_POST["mod_email_estu_act2"] == "")
{
			if (strlen($_POST['mod_email_estu_act2']) >59 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Email Estudiante invalido. "; }

			if (!filter_var( ($_POST['mod_email_estu_act2']), FILTER_VALIDATE_EMAIL)) // verifica un formato correcto de email
			{  $errorZ .= "- Email Estudiante no valido. "; }
}





    if (strlen($_POST['v_otra_act2']) >29 )  // no sea mayor a 40 caracteres
    {   $errorZ .= "- Otra vacuna act2? del representado invalido. "; }






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


if ($_POST['plantel_pro2'])      // si tiene algo
			{   
			if (strlen($_POST['plantel_pro2']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Nombre del plantel de procedencia 2, mayor a 40 caracteres. "; }

			}


if (strlen($_POST['obs_text2']) >750 )  // verifica que el campo obs1 no sea mayor a 750 caracteres
		{  $errorZ .= "- Observaciones N°2, mayor a 750 caracteres. "; }





 }










/*  del representado 3  */

if($number_alum >= '3' ) {

if (!$_POST['nombres_est3'])      // verifica que no este vacío
		{   $errorZ .= "- Nombre representado 3, requerido. "; }

		if (strlen($_POST['nombres_est3']) >40 )  // no sea mayor a 40 caracteres
		{   $errorZ .= "- Nombre representado 3, invalido. "; }

		if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['nombres_est3']) ) )  // comprueba que sean letras
		{   $errorZ .= "- Nombre representado 3, no valido. "; }


		







						if (!$_POST['mod_alergias_estud_act3'])      // verifica que no este vacío
		{   $errorZ .= "- Es Alérgico a 3? del representado requerido. "; }

		if (strlen($_POST['mod_alergias_estud_act3']) >29 )  // no sea mayor a 40 caracteres
		{   $errorZ .= "- Es Alérgico a 3? del representado invalido. "; }





					if (!$_POST['mod_padecio_estud_act3'])      // verifica que no este vacío
		{   $errorZ .= "- A padecido de 3? del representado requerido. "; }

		if (strlen($_POST['mod_padecio_estud_act3']) >59 )  // no sea mayor a 40 caracteres
		{   $errorZ .= "- A padecido de 3? del representado invalido. "; }





                
    if (strlen($_POST['mod_control_med_act3']) >59 )  // no sea mayor a 40 caracteres
    {   $errorZ .= "- En control médico act3? del representado invalido. "; }




if (!$_POST["mod_email_estu_act3"] == "")
{
			if (strlen($_POST['mod_email_estu_act3']) >59 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Email Estudiante invalido. "; }

			if (!filter_var( ($_POST['mod_email_estu_act3']), FILTER_VALIDATE_EMAIL)) // verifica un formato correcto de email
			{  $errorZ .= "- Email Estudiante no valido. "; }
}




    

    if (strlen($_POST['v_otra_act3']) >29 )  // no sea mayor a 40 caracteres
    {   $errorZ .= "- Otra vacuna act3? del representado invalido. "; }






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


if ($_POST['plantel_pro3'])      // si tiene algo
			{   
			if (strlen($_POST['plantel_pro3']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Nombre del plantel de procedencia 3, mayor a 40 caracteres. "; }

			}


if (strlen($_POST['obs_text3']) >750 )  // verifica que el campo obs1 no sea mayor a 750 caracteres
		{  $errorZ .= "- Observaciones N°3, mayor a 750 caracteres. "; }





 }











/*  del representado 4 */

if($number_alum >= '4' ) {

if (!$_POST['nombres_est4'])      // verifica que no este vacío
		{   $errorZ .= "- Nombre representado 4, requerido. "; }

		if (strlen($_POST['nombres_est4']) >40 )  // no sea mayor a 40 caracteres
		{   $errorZ .= "- Nombre representado 4, invalido. "; }

		if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['nombres_est4']) ) )  // comprueba que sean letras
		{   $errorZ .= "- Nombre representado 4, no valido. "; }


			if (!$_POST['apellidos_est4'])      // verifica que no este vacío
			{   $errorZ .= "- Apellido representado 4, requerido. "; }

			if (strlen($_POST['apellidos_est4']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Apellido representado 4, invalido. "; }

			if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['apellidos_est4']) ) ) // comprueba que sean letras
      		{   $errorZ .= "- Apellido representado 4, no valido. "; }


if ($_POST['cedula_est4'])  // si tiene algo la cedula
		{   

		if (strlen($_POST['cedula_est4']) >13 )  // verifica que el campo cedula no sea mayor a 9 caracteres
		{  $errorZ .= "- Cedula representado 4, invalida. "; }

		if(!is_numeric($_POST['cedula_est4']) ) // verifica que sean solo números
		{  $errorZ .= "- Cedula representado 4, no valida o con espacios. "; }



		if ($_POST['cedula_est2'] == $_POST['cedula_est4']) {
			
			{  $errorZ .= "- Documento de identidad del Est. 2, debe ser diferente al del Est. 4. "; }
		}


		if ($_POST['cedula_est1'] == $_POST['cedula_est4']) {
			
			{  $errorZ .= "- Documento de identidad del Est. 1, debe ser diferente al del Est. 4. "; }
		}


		if ($_POST['cedula_est3'] == $_POST['cedula_est4']) {
			
			{  $errorZ .= "- Documento de identidad del Est. 3, debe ser diferente al del Est. 4. "; }
		}



		if ($_POST['cedula'] == $_POST['cedula_est4']) {
			
			{  $errorZ .= "- Documento de identidad del Representante, debe ser diferente al del Est. 4. "; }
		}


		

		$queryEE44 = "SELECT ci_estu FROM reg_estudiantes WHERE ci_estu ='".mysqli_real_escape_string($enlace,$_POST['cedula_est4'])."' LIMIT 1";
		$resultEE44 = mysqli_query($enlace,$queryEE44);

							
				if (mysqli_num_rows($resultEE44)>0)
				{
				$errorZ.="- Cedula del representado 4, fue anteriormente registrada. ";
				
				}
          }





if (!$_POST['expediente_est4'])  // verifica que no este vacío el campo cedula escolar
		{  $errorZ .= "- Expediente representado 4, requerido. "; }

		if (strlen($_POST['expediente_est4']) >13 )  // verifica que el campo cedula no sea mayor a 9 caracteres
		{  $errorZ .= "- Expediente representado 4, invalido. "; }

		if(!is_numeric($_POST['expediente_est4']) ) // verifica que sean solo números
		{  $errorZ .= "- Expediente representado 4, no valido o con espacios. "; }



		if ($_POST['expediente_est1'] == $_POST['expediente_est4']) {
			
			{  $errorZ .= "- Exp. del Est. 1, debe ser diferente al exp. del Est. 4. "; }
		}


		if ($_POST['expediente_est2'] == $_POST['expediente_est4']) {
			
			{  $errorZ .= "- Exp. del Est. 2, debe ser diferente al exp. del Est. 4. "; }
		}


		if ($_POST['expediente_est3'] == $_POST['expediente_est4']) {
			
			{  $errorZ .= "- Exp. del Est. 3, debe ser diferente al exp. del Est. 4. "; }
		}



else { 
		

		$queryEEexp44 = "SELECT estu_expediente FROM reg_estudiantes WHERE estu_expediente ='".mysqli_real_escape_string($enlace,$_POST['expediente_est4'])."' LIMIT 1";
		$resultEEexp44 = mysqli_query($enlace,$queryEEexp44);

							
				if (mysqli_num_rows($resultEEexp44)>0)
				{
				$errorZ.="- Expediente del representado 4, fue anteriormente registrado. ";
				
				}
}


if ($_POST['plantel_pro4'])      // si tiene algo
			{   
			if (strlen($_POST['plantel_pro4']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Nombre del plantel de procedencia 4, mayor a 40 caracteres. "; }

			}


if (strlen($_POST['obs_text4']) >750 )  // verifica que el campo obs1 no sea mayor a 750 caracteres
		{  $errorZ .= "- Observaciones N°4, mayor a 750 caracteres. "; }





 }













/*  del representado 5 */

if($number_alum >= '5' ) {

if (!$_POST['nombres_est5'])      // verifica que no este vacío
		{   $errorZ .= "- Nombre representado 5, requerido. "; }

		if (strlen($_POST['nombres_est5']) >40 )  // no sea mayor a 40 caracteres
		{   $errorZ .= "- Nombre representado 5, invalido. "; }

		if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['nombres_est5']) ) )  // comprueba que sean letras
		{   $errorZ .= "- Nombre representado 5, no valido. "; }


			if (!$_POST['apellidos_est5'])      // verifica que no este vacío
			{   $errorZ .= "- Apellido representado 5, requerido. "; }

			if (strlen($_POST['apellidos_est5']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Apellido representado 5, invalido. "; }

			if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['apellidos_est5']) ) ) // comprueba que sean letras
      		{   $errorZ .= "- Apellido representado 5, no valido. "; }


if ($_POST['cedula_est5'])  // si tiene algo la cedula
		{   

		if (strlen($_POST['cedula_est5']) >13 )  // verifica que el campo cedula no sea mayor a 9 caracteres
		{  $errorZ .= "- Cedula representado 5, invalida. "; }

		if(!is_numeric($_POST['cedula_est5']) ) // verifica que sean solo números
		{  $errorZ .= "- Cedula representado 5, no valida o con espacios. "; }



		if ($_POST['cedula_est2'] == $_POST['cedula_est5']) {
			
			{  $errorZ .= "- Documento de identidad del Est. 2, debe ser diferente al del Est. 5. "; }
		}


		if ($_POST['cedula_est1'] == $_POST['cedula_est5']) {
			
			{  $errorZ .= "- Documento de identidad del Est. 1, debe ser diferente al del Est. 5. "; }
		}


		if ($_POST['cedula_est3'] == $_POST['cedula_est5']) {
			
			{  $errorZ .= "- Documento de identidad del Est. 3, debe ser diferente al del Est. 5. "; }
		}


			if ($_POST['cedula_est4'] == $_POST['cedula_est5']) {
			
			{  $errorZ .= "- Documento de identidad del Est. 4, debe ser diferente al del Est. 5. "; }
		}



		if ($_POST['cedula'] == $_POST['cedula_est5']) {
			
			{  $errorZ .= "- Documento de identidad del Representante, debe ser diferente al del Est. 5. "; }
		}


		

		$queryEE55 = "SELECT ci_estu FROM reg_estudiantes WHERE ci_estu ='".mysqli_real_escape_string($enlace,$_POST['cedula_est5'])."' LIMIT 1";
		$resultEE55 = mysqli_query($enlace,$queryEE55);

							
				if (mysqli_num_rows($resultEE55)>0)
				{
				$errorZ.="- Cedula del representado 5, fue anteriormente registrada. ";
				
				}
          }





if (!$_POST['expediente_est5'])  // verifica que no este vacío el campo cedula escolar
		{  $errorZ .= "- Expediente representado 5, requerido. "; }

		if (strlen($_POST['expediente_est5']) >13 )  // verifica que el campo cedula no sea mayor a 9 caracteres
		{  $errorZ .= "- Expediente representado 5, invalido. "; }

		if(!is_numeric($_POST['expediente_est5']) ) // verifica que sean solo números
		{  $errorZ .= "- Expediente representado 5, no valido o con espacios. "; }



		if ($_POST['expediente_est1'] == $_POST['expediente_est5']) {
			
			{  $errorZ .= "- Exp. del Est. 1, debe ser diferente al exp. del Est. 5. "; }
		}


		if ($_POST['expediente_est2'] == $_POST['expediente_est5']) {
			
			{  $errorZ .= "- Exp. del Est. 2, debe ser diferente al exp. del Est. 5. "; }
		}


		if ($_POST['expediente_est3'] == $_POST['expediente_est5']) {
			
			{  $errorZ .= "- Exp. del Est. 3, debe ser diferente al exp. del Est. 5. "; }
		}


		if ($_POST['expediente_est4'] == $_POST['expediente_est5']) {
			
			{  $errorZ .= "- Exp. del Est. 4, debe ser diferente al exp. del Est. 5. "; }
		}



else { 
		

$queryEEexp55 = "SELECT estu_expediente FROM reg_estudiantes WHERE estu_expediente ='".mysqli_real_escape_string($enlace,$_POST['expediente_est5'])."' LIMIT 1";
		$resultEEexp55 = mysqli_query($enlace,$queryEEexp55);

							
				if (mysqli_num_rows($resultEEexp55)>0)
				{
				$errorZ.="- Expediente del representado 5, fue anteriormente registrado. ";
				
				}
}


if ($_POST['plantel_pro5'])      // si tiene algo
			{   
			if (strlen($_POST['plantel_pro5']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Nombre del plantel de procedencia 5, mayor a 40 caracteres. "; }

			}


if (strlen($_POST['obs_text5']) >750 )  // verifica que el campo obs1 no sea mayor a 750 caracteres
		{  $errorZ .= "- Observaciones N°5, mayor a 750 caracteres. "; }





 }






?>