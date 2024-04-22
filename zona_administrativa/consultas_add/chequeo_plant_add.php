<?php

		if (!$_POST['nombres'])      // verifica que no este vacío
		{   $errorZ .= "- Nombre requerido. "; }

		if (strlen($_POST['nombres']) >40 )  // no sea mayor a 40 caracteres
		{   $errorZ .= "- Nombre invalido. "; }

		if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['nombres']) ) )  // comprueba que sean letras
		{   $errorZ .= "- Nombre no valido. "; }


			if (!$_POST['apellidos'])      // verifica que no este vacío
			{   $errorZ .= "- Apellido requerido. "; }

			if (strlen($_POST['apellidos']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Apellido invalido. "; }

			if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['apellidos']) ) ) // comprueba que sean letras
      		{   $errorZ .= "- Apellido no valido. "; }


		if (!$_POST['cedula'])  // verifica que no este vacío el campo cedula
		{  $errorZ .= "- Cedula requerida. "; }

		if (strlen($_POST['cedula']) >9 )  // verifica que el campo cedula no sea mayor a 9 caracteres
		{  $errorZ .= "- Cedula invalida. "; }

		if(!is_numeric($_POST['cedula']) ) // verifica que sean solo números
		{  $errorZ .= "- Cedula no valida. "; }


			if (!$_POST['telefono1'])      // verifica que no este vacío
			{   $errorZ .= "- Teléfono principal requerido. "; }

			if (strlen($_POST['telefono1']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Teléfono principal invalido. "; }

			if(!is_numeric($_POST['telefono1']) ) // verifica que sean solo números
			{  $errorZ .= "- Teléfono principal no valido. "; }


		if ($_POST['telefono2'])  
		{
			if (strlen($_POST['telefono2']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Teléfono adicional invalido. "; }

			if(!is_numeric($_POST['telefono2']) ) // verifica que sean solo números
			{  $errorZ .= "- Teléfono adicional no valido. "; }
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





			if (strlen($_POST['plantel_ini']) >40 )  // verifica que el campo plantel inicia no sea mayor a 40 caracteres
					{  $errorZ .= "- Plantel donde inicia invalido. "; }



if (!$_POST["edad_priv"] == "" ) {

if(!is_numeric($_POST['edad_priv']) ) // verifica que sean solo números
		{  $errorZ .= "- Datos años en privado invalido. "; }

}


if (strlen($_POST['edad_priv']) >4 )  // verifica que el campo plantel inicia no sea mayor a 40 caracteres
		{  $errorZ .= "- Datos años en privado invalido. "; }



			if (!$_POST["edad_ofi"] == "" ) {


			if(!is_numeric($_POST['edad_ofi']) ) // verifica que sean solo números
					{  $errorZ .= "- Datos años en oficial invalido. "; }

			}


			if (strlen($_POST['edad_ofi']) >4 )  // verifica que el campo plantel inicia no sea mayor a 40 caracteres
					{  $errorZ .= "- Datos años en oficial invalido. "; }




								if (!$_POST["edad_tot"] == "" ) {


			if(!is_numeric($_POST['edad_tot']) ) // verifica que sean solo números
					{  $errorZ .= "- Años totales invalido. "; }

			}


			if (strlen($_POST['edad_tot']) >4 )  // verifica que el campo plantel inicia no sea mayor a 40 caracteres
					{  $errorZ .= "- Años totales invalido. "; }





if (strlen($_POST['names_planteles_a']) >40 )  // verifica que el campo plantel inicia no sea mayor a 40 caracteres
		{  $errorZ .= "- Plantel donde trabaja invalido. "; }



if (strlen($_POST['names_planteles_b']) >40 )  // verifica que el campo plantel inicia no sea mayor a 40 caracteres
		{  $errorZ .= "- Plantel donde trabaja invalido. "; }



if (strlen($_POST['names_planteles_c']) >40 )  // verifica que el campo plantel inicia no sea mayor a 40 caracteres
		{  $errorZ .= "- Plantel donde trabaja invalido. "; }



if (strlen($_POST['names_planteles_d']) >40 )  // verifica que el campo plantel inicia no sea mayor a 40 caracteres
		{  $errorZ .= "- Plantel donde trabaja invalido. "; }




if (strlen($_POST['obs_text']) >250 )  // verifica que el campo plantel inicia no sea mayor a 40 caracteres
		{  $errorZ .= "- Observaciones mayor a 250 caracteres. "; }





if ($_POST["total_tiempillo1"] != "" ) {


if (strlen($_POST['total_tiempillo1']) >2 )  // verifica que el campo plantel inicia no sea mayor a 40 caracteres
		{  $errorZ .= "- El Tot. de horas semanales es incorrecto. "; }



if(!is_numeric($_POST['total_tiempillo1']) ) // verifica que sean solo números
		{  $errorZ .= "- El Tot. de horas semanales es invalido. "; }


}


if ($_POST["total_tiempillo2"] != "" ) {


if (strlen($_POST['total_tiempillo2']) >2 )  // verifica que el campo plantel inicia no sea mayor a 40 caracteres
		{  $errorZ .= "- El Tot. de horas semanales es incorrecto. "; }



if(!is_numeric($_POST['total_tiempillo2']) ) // verifica que sean solo números
		{  $errorZ .= "- El Tot. de horas semanales es invalido. "; }


}


?>