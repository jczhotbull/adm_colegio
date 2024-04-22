<?php

		if (!$_POST['mod_nombre_per'])      // verifica que no este vacío
		{   $errorZ .= "- Nombre requerido. "; }

		if (strlen($_POST['mod_nombre_per']) >40 )  // no sea mayor a 40 caracteres
		{   $errorZ .= "- Nombre invalido. "; }

		if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['mod_nombre_per']) ) )  // comprueba que sean letras
		{   $errorZ .= "- Nombre no valido. "; }


			if (!$_POST['mod_apellido_per'])      // verifica que no este vacío
			{   $errorZ .= "- Apellido requerido. "; }

			if (strlen($_POST['mod_apellido_per']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Apellido invalido. "; }

			if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['mod_apellido_per']) ) ) // comprueba que sean letras
      		{   $errorZ .= "- Apellido no valido. "; }


		if (!$_POST['mod_ci_per'])  // verifica que no este vacío el campo cedula
		{  $errorZ .= "- Cedula requerida. "; }

		if (strlen($_POST['mod_ci_per']) >9 )  // verifica que el campo cedula no sea mayor a 9 caracteres
		{  $errorZ .= "- Cedula invalida. "; }

		if(!is_numeric($_POST['mod_ci_per']) ) // verifica que sean solo números
		{  $errorZ .= "- Cedula no valida. "; }


			if (!$_POST['mod_celular_per'])      // verifica que no este vacío
			{   $errorZ .= "- Teléfono principal requerido. "; }

			if (strlen($_POST['mod_celular_per']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Teléfono principal invalido. "; }

			if(!is_numeric($_POST['mod_celular_per']) ) // verifica que sean solo números
			{  $errorZ .= "- Teléfono principal no valido. "; }


		if ($_POST['mod_telefono_per'])  
		{
			if (strlen($_POST['mod_telefono_per']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Teléfono adicional invalido. "; }

			if(!is_numeric($_POST['mod_telefono_per']) ) // verifica que sean solo números
			{  $errorZ .= "- Teléfono adicional no valido. "; }
		}
					    

if (!$_POST["mod_email_per"] == "")
{
			if (strlen($_POST['mod_email_per']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Email invalido. "; }

			if (!filter_var( ($_POST['mod_email_per']), FILTER_VALIDATE_EMAIL)) // verifica un formato correcto de email
			{  $errorZ .= "- Email no valido. "; }
}

		if (!$_POST['mod_calle'])  // verifica que no este vacío el campo 
		{  $errorZ .= "- Calle o sector requerido. "; }

		if (strlen($_POST['mod_calle']) >150 )  // no sea mayor a 150 caracteres
		{   $errorZ .= "- Calle o sector invalido. "; }


			if (!$_POST['mod_nombre_vi'])  // verifica que no este vacío el campo 
			{  $errorZ .= "- Nombre de la vivienda requerida. "; }

			if (strlen($_POST['mod_nombre_vi']) >150 )  // no sea mayor a 200 caracteres
			{   $errorZ .= "- Nombre de la vivienda invalida. "; }





			if (strlen($_POST['mod_plantel_ini']) >40 )  // verifica que el campo plantel inicia no sea mayor a 40 caracteres
					{  $errorZ .= "- Plantel donde inicia invalido. "; }



if (!$_POST["mod_edad_priv"] == "" ) {

if(!is_numeric($_POST['mod_edad_priv']) ) // verifica que sean solo números
		{  $errorZ .= "- Datos años en privado invalido. "; }

}


if (strlen($_POST['mod_edad_priv']) >4 )  // verifica que el campo plantel inicia no sea mayor a 40 caracteres
		{  $errorZ .= "- Datos años en privado invalido. "; }



			if (!$_POST["mod_edad_ofi"] == "" ) {


			if(!is_numeric($_POST['mod_edad_ofi']) ) // verifica que sean solo números
					{  $errorZ .= "- Datos años en oficial invalido. "; }

			}


			if (strlen($_POST['mod_edad_ofi']) >4 )  // verifica que el campo plantel inicia no sea mayor a 40 caracteres
					{  $errorZ .= "- Datos años en oficial invalido. "; }




					if (!$_POST["mod_edad_total"] == "" ) {


			if(!is_numeric($_POST['mod_edad_total']) ) // verifica que sean solo números
					{  $errorZ .= "- Años totales invalido. "; }

			}


			if (strlen($_POST['mod_edad_total']) >4 )  // verifica que el campo plantel inicia no sea mayor a 40 caracteres
					{  $errorZ .= "- Años totales invalido. "; }





if (strlen($_POST['mod_nombre_plant_traA']) >40 )  // verifica que el campo plantel inicia no sea mayor a 40 caracteres
		{  $errorZ .= "- Plantel donde trabaja invalido. "; }



if (strlen($_POST['mod_nombre_plant_traB']) >40 )  // verifica que el campo plantel inicia no sea mayor a 40 caracteres
		{  $errorZ .= "- Plantel donde trabaja invalido. "; }



if (strlen($_POST['mod_nombre_plant_traC']) >40 )  // verifica que el campo plantel inicia no sea mayor a 40 caracteres
		{  $errorZ .= "- Plantel donde trabaja invalido. "; }



if (strlen($_POST['mod_nombre_plant_traD']) >40 )  // verifica que el campo plantel inicia no sea mayor a 40 caracteres
		{  $errorZ .= "- Plantel donde trabaja invalido. "; }




if (strlen($_POST['mod_obs_text']) >250 )  // verifica que el campo plantel inicia no sea mayor a 40 caracteres
		{  $errorZ .= "- Observaciones mayor a 250 caracteres. "; }




if (strlen($_POST['mod_total_tiempillo']) >2 )  // verifica que el campo plantel inicia no sea mayor a 40 caracteres
		{  $errorZ .= "- El Tot. de horas semanales es incorrecto. "; }



if(!is_numeric($_POST['mod_total_tiempillo']) ) // verifica que sean solo números
		{  $errorZ .= "- El Tot. de horas semanales es invalido. "; }


?>