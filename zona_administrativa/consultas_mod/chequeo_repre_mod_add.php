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
					    



		



		if (!$_POST['mod_calle'])  // verifica que no este vacío el campo 
		{  $errorZ .= "- Calle o sector requerido. "; }

		if (strlen($_POST['mod_calle']) >150 )  // no sea mayor a 150 caracteres
		{   $errorZ .= "- Calle o sector invalido. "; }


			if (!$_POST['mod_nombre_vivienda'])  // verifica que no este vacío el campo 
			{  $errorZ .= "- Nombre de la vivienda requerida. "; }

			if (strlen($_POST['mod_nombre_vivienda']) >150 )  // no sea mayor a 200 caracteres
			{   $errorZ .= "- Nombre de la vivienda invalida. "; }









?>