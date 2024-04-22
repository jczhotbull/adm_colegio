<?php

		if (!$_POST['mod_nombres_repre'])      // verifica que no este vacío
		{   $errorZ .= "- Nombre del representante requerido. "; }

		if (strlen($_POST['mod_nombres_repre']) >40 )  // no sea mayor a 40 caracteres
		{   $errorZ .= "- Nombre del representante invalido. "; }

		if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['mod_nombres_repre']) ) )  // comprueba que sean letras
		{   $errorZ .= "- Nombre del representante no valido. "; }


			if (!$_POST['mod_apellidos_repre'])      // verifica que no este vacío
			{   $errorZ .= "- Apellido del representante requerido. "; }

			if (strlen($_POST['mod_apellidos_repre']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Apellido del representante invalido. "; }

			if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['mod_apellidos_repre']) ) ) // comprueba que sean letras
      		{   $errorZ .= "- Apellido del representante no valido. "; }



if (!$_POST["mod_email_repre"] == "")
{
			if (strlen($_POST['mod_email_repre']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Email invalido. "; }

			if (!filter_var( ($_POST['mod_email_repre']), FILTER_VALIDATE_EMAIL)) // verifica un formato correcto de email
			{  $errorZ .= "- Email no valido. "; }
}








		if (!$_POST['mod_ci_repre'])  // verifica que no este vacío el campo cedula
		{  $errorZ .= "- Cedula del representante requerida. "; }


if ($_POST['mod_ci_repre'])  // si tiene algo la cedula
		{ 


			if (strlen($_POST['mod_ci_repre']) >9 )  // verifica que el campo cedula no sea mayor a 9 caracteres
			{  $errorZ .= "- Cedula del representante invalida. "; }

			if(!is_numeric($_POST['mod_ci_repre']) ) // verifica que sean solo números
			{  $errorZ .= "- Cedula del representante no valida. "; }


			if ($_POST['mod_ci_repre'] == $_POST['mod_ci_estud']) {
			
			{  $errorZ .= "- Doc. de Id. del representante,  debe ser diferente al Doc. de Id. del representado. "; }
		
			}


			if ($_POST['mod_ci_repre'] == $_POST['mod_exp_estud']) {
			
			{  $errorZ .= "- Doc. de Id. del representante, debe ser diferente al N°. de expediente del representado. "; }
		
			}


			$id_del_repreTYU = $_POST["id_repre_GHJ"];


			include("../conectar.php"); 


			$queryCx = "SELECT id_repre FROM reg_representante WHERE ci_repre ='".mysqli_real_escape_string($enlace,$_POST['mod_ci_repre'])."' LIMIT 1";

			  $resultCx = mysqli_query($enlace,$queryCx);

			  $filaCx=mysqli_fetch_array($resultCx);


			  if ($filaCx['id_repre'] != $id_del_repreTYU AND mysqli_num_rows($resultCx)>0)
			      
			      {
			      $errorZ="- N° de Doc. de Id. del representante ingresado ya está asignado a otro representante. ";
			      mysqli_close($enlace); 
			      }


			  else {  mysqli_close($enlace);  }



        }




			if (!$_POST['mod_celular_repre'])      // verifica que no este vacío
			{   $errorZ .= "- Teléfono principal requerido. "; }

			if (strlen($_POST['mod_celular_repre']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Teléfono principal invalido. "; }

			if(!is_numeric($_POST['mod_celular_repre']) ) // verifica que sean solo números
			{  $errorZ .= "- Teléfono principal no valido. "; }


		if ($_POST['mod_telefono_repre'])  
		{
			if (strlen($_POST['mod_telefono_repre']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Teléfono adicional invalido. "; }

			if(!is_numeric($_POST['mod_telefono_repre']) ) // verifica que sean solo números
			{  $errorZ .= "- Teléfono adicional no valido. "; }
		}
					    



		if (!$_POST['mod_password_repre'])      // verifica que no este vacío
			        { $errorZ .= "<br> - El password de ingreso es requerido."; }

			    if (strlen($_POST['mod_password_repre']) >12 )  // verifica que el campo no sea mayor a 9 caracteres
			        {  $errorZ .= "<br> - El password de ingreso no puede ser mayor a 12 dígitos."; }

			    if (!preg_match ("/^[A-Za-z0-9]+$/",($_POST['mod_password_repre']) ) ) // comprueba que solo se puedan escribir letras sencillas y números sin espacios
      		        {   $errorZ .= "<br> - Carácter no valido en el password de ingreso."; }



		if (!$_POST['mod_nombres_estud'])      // verifica que no este vacío
		{   $errorZ .= "- Nombre del representado requerido. "; }

		if (strlen($_POST['mod_nombres_estud']) >40 )  // no sea mayor a 40 caracteres
		{   $errorZ .= "- Nombre del representado invalido. "; }

		if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['mod_nombres_estud']) ) )  // comprueba que sean letras
		{   $errorZ .= "- Nombre del representado no valido. "; }





			if (!$_POST['mod_apellidos_estud'])      // verifica que no este vacío
			{   $errorZ .= "- Apellido del representado requerido. "; }

			if (strlen($_POST['mod_apellidos_estud']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Apellido del representado invalido. "; }

			if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['mod_apellidos_estud']) ) ) // comprueba que sean letras
      		{   $errorZ .= "- Apellido del representado no valido. "; }






		if (!$_POST['mod_exp_estud'])  // verifica que no este vacío el campo exp
		{  $errorZ .= "- Expediente del representado requerido. "; }


if ($_POST['mod_exp_estud'])  // si tiene algo el exp
		{ 


			if (strlen($_POST['mod_exp_estud']) >12 )  // verifica que el campo cedula no sea mayor a 9 caracteres
			{  $errorZ .= "- Expediente del representado invalido. "; }

			if(!is_numeric($_POST['mod_exp_estud']) ) // verifica que sean solo números
			{  $errorZ .= "- Expediente del representado no valido. "; }


			


			


			$id_del_estud_GHJ = $_POST["id_estu_GHJ"];


			include("../conectar.php"); 


			$queryCRRI = "SELECT id_estud FROM reg_estudiantes WHERE estu_expediente ='".mysqli_real_escape_string($enlace,$_POST['mod_exp_estud'])."' LIMIT 1";

			  $resultCRRI = mysqli_query($enlace,$queryCRRI);

			  $filaCRRI=mysqli_fetch_array($resultCRRI);


			  if ($filaCRRI['id_estud'] != $id_del_estud_GHJ AND mysqli_num_rows($resultCRRI)>0)
			      
			      {
			      $errorZ="- N° de expediente ingresado ya está asignado a otro estudiante. ";
			      mysqli_close($enlace); 
			      }


			  else {  mysqli_close($enlace);  }



        }







	


if ($_POST['mod_ci_estud'])  // si tiene algo la cedula
		{ 


			if (strlen($_POST['mod_ci_estud']) >12 )  // verifica que el campo cedula no sea mayor a 9 caracteres
			{  $errorZ .= "- Cedula del representado invalida. "; }

			if(!is_numeric($_POST['mod_ci_estud']) ) // verifica que sean solo números
			{  $errorZ .= "- Cedula del representado no valida. "; }


			


			if ($_POST['mod_ci_estud'] == $_POST['mod_ci_repre']) {
			
			{  $errorZ .= "- Doc. de Id. del representado, debe ser diferente al N°. de Doc. de Id. del representante. "; }
		
			}


			$id_del_estud_GHJ = $_POST["id_estu_GHJ"];


			include("../conectar.php"); 


			$queryAAFF = "SELECT id_estud FROM reg_estudiantes WHERE ci_estu ='".mysqli_real_escape_string($enlace,$_POST['mod_ci_estud'])."' LIMIT 1";

			  $resultAAFF = mysqli_query($enlace,$queryAAFF);

			  $filaAAFF=mysqli_fetch_array($resultAAFF);


			  if ($filaAAFF['id_estud'] != $id_del_estud_GHJ AND mysqli_num_rows($resultAAFF)>0)
			      
			      {
			      $errorZ="- N° de Doc. de Id. del estudiante ingresado ya está asignado a otro estudiante. ";
			      mysqli_close($enlace); 
			      }


			  else {  mysqli_close($enlace);  }



        }




			





?>