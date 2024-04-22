<?php

		if (!$_POST['nombrep'])      // verifica que no este vacío
		{   $errorZ .= "- Nombre requerido. "; }

		if (strlen($_POST['nombrep']) >100 )  // no sea mayor a 10 caracteres
		{   $errorZ .= "- Nombre invalido. "; }


		if (!$_POST['rif'])      // verifica que no este vacío
		{   $errorZ .= "- Rif requerido. "; }

		if (strlen($_POST['rif']) >20 )  // no sea mayor a 10 caracteres
		{   $errorZ .= "- Rif invalido. "; }

		


		if (!$_POST['codigoplant'])  // verifica que no este vacío el campo cedula
		{  $errorZ .= "- Código requerido. "; }

		if (strlen($_POST['codigoplant']) >20 )  // verifica que el campo cedula no sea mayor a 9 caracteres
		{  $errorZ .= "- Código invalido. "; }

		


			if (!$_POST['telefono1'])      // verifica que no este vacío
			{   $errorZ .= "- Teléfono principal requerido. "; }

			if (strlen($_POST['telefono1']) >20 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Teléfono principal invalido. "; }

			if(!is_numeric($_POST['telefono1']) ) // verifica que sean solo números
			{  $errorZ .= "- Teléfono principal no valido. "; }


		if ($_POST['telefono2'])  
		{
			if (strlen($_POST['telefono2']) >20 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Teléfono adicional invalido. "; }

			if(!is_numeric($_POST['telefono2']) ) // verifica que sean solo números
			{  $errorZ .= "- Teléfono adicional no valido. "; }
		}
					    

if (!$_POST["emailp"] == "")
{
			if (strlen($_POST['emailp']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Email invalido. "; }

			if (!filter_var( ($_POST['emailp']), FILTER_VALIDATE_EMAIL)) // verifica un formato correcto de email
			{  $errorZ .= "- Email no valido. "; }
}



if (!$_POST["emailaaa"] == "")
{
			if (strlen($_POST['emailaaa']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Email invalido. "; }

			if (!filter_var( ($_POST['emailaaa']), FILTER_VALIDATE_EMAIL)) // verifica un formato correcto de email
			{  $errorZ .= "- Email no valido. "; }
}



		if (!$_POST['calle'])  // verifica que no este vacío el campo 
		{  $errorZ .= "- Calle o sector requerido. "; }

		if (strlen($_POST['calle']) >150 )  // no sea mayor a 150 caracteres
		{   $errorZ .= "- Calle o sector invalido. "; }


			if (!$_POST['nombre_vi'])  // verifica que no este vacío el campo 
			{  $errorZ .= "- Nombre de la localidad requerido. "; }

			if (strlen($_POST['nombre_vi']) >150 )  // no sea mayor a 200 caracteres
			{   $errorZ .= "- Nombre de la localidad invalido. "; }




?>