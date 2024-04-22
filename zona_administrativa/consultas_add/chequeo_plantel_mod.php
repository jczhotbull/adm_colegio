<?php

		if (!$_POST['mod_nombrep'])      // verifica que no este vacío
		{   $errorZ .= "- Nombre requerido. "; }

		if (strlen($_POST['mod_nombrep']) >100 )  // no sea mayor a 100 caracteres
		{   $errorZ .= "- Nombre invalido. "; }


		if (!$_POST['mod_rif'])      // verifica que no este vacío
		{   $errorZ .= "- Rif requerido. "; }

		if (strlen($_POST['mod_rif']) >20 )  // no sea mayor a 10 caracteres
		{   $errorZ .= "- Rif invalido. "; }

		


		if (!$_POST['mod_codigoplant'])  // verifica que no este vacío el campo cedula
		{  $errorZ .= "- Código requerido. "; }

		if (strlen($_POST['mod_codigoplant']) >20 )  // verifica que el campo cedula no sea mayor a 9 caracteres
		{  $errorZ .= "- Código invalido. "; }

		


			if (!$_POST['mod_telefono1'])      // verifica que no este vacío
			{   $errorZ .= "- Teléfono principal requerido. "; }

			if (strlen($_POST['mod_telefono1']) >20 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Teléfono principal invalido. "; }

			if(!is_numeric($_POST['mod_telefono1']) ) // verifica que sean solo números
			{  $errorZ .= "- Teléfono principal no valido. "; }


		if ($_POST['mod_telefono2'])  
		{
			if (strlen($_POST['mod_telefono2']) >20 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Teléfono adicional invalido. "; }

			if(!is_numeric($_POST['mod_telefono2']) ) // verifica que sean solo números
			{  $errorZ .= "- Teléfono adicional no valido. "; }
		}
					    

if (!$_POST["mod_emailp"] == "")
{
			if (strlen($_POST['mod_emailp']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Email invalido. "; }

			if (!filter_var( ($_POST['mod_emailp']), FILTER_VALIDATE_EMAIL)) // verifica un formato correcto de email
			{  $errorZ .= "- Email no valido. "; }
}




if (!$_POST["mod_emailaaa"] == "")
{
			if (strlen($_POST['mod_emailaaa']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Email invalido. "; }

			if (!filter_var( ($_POST['mod_emailaaa']), FILTER_VALIDATE_EMAIL)) // verifica un formato correcto de email
			{  $errorZ .= "- Email no valido. "; }
}



		if (!$_POST['mod_calle'])  // verifica que no este vacío el campo 
		{  $errorZ .= "- Calle o sector requerido. "; }

		if (strlen($_POST['mod_calle']) >150 )  // no sea mayor a 150 caracteres
		{   $errorZ .= "- Calle o sector invalido. "; }


			if (!$_POST['mod_nombre_vi'])  // verifica que no este vacío el campo 
			{  $errorZ .= "- Nombre de la localidad requerido. "; }

			if (strlen($_POST['mod_nombre_vi']) >150 )  // no sea mayor a 200 caracteres
			{   $errorZ .= "- Nombre de la localidad invalido. "; }

?>