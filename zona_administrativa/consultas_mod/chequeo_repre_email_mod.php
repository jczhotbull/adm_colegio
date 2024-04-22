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
					    





?>