<?php
	

// del representado....


		if (!$_POST['mod_nombres_estud'])      // verifica que no este vacío
		{   $errorZ .= "- Nombre del representado requerido. "; }

		if (strlen($_POST['mod_nombres_estud']) >40 )  // no sea mayor a 40 caracteres
		{   $errorZ .= "- Nombre del representado invalido. "; }

		if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['mod_nombres_estud']) ) )  // comprueba que sean letras
		{   $errorZ .= "- Nombre del representado no valido. "; }



			





						if (!$_POST['mod_alergias_estud'])      // verifica que no este vacío
		{   $errorZ .= "- Es Alérgico a? del representado requerido. "; }

		if (strlen($_POST['mod_alergias_estud']) >29 )  // no sea mayor a 40 caracteres
		{   $errorZ .= "- Es Alérgico a? del representado invalido. "; }





					if (!$_POST['mod_padecio_estud'])      // verifica que no este vacío
		{   $errorZ .= "- A padecido de? del representado requerido. "; }

		if (strlen($_POST['mod_padecio_estud']) >59 )  // no sea mayor a 40 caracteres
		{   $errorZ .= "- A padecido de? del representado invalido. "; }






			if (!$_POST['mod_apellidos_estud'])      // verifica que no este vacío
			{   $errorZ .= "- Apellido del representado requerido. "; }

			if (strlen($_POST['mod_apellidos_estud']) >40 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Apellido del representado invalido. "; }

			if (!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚÄËÏÖÜäëïöüàèìòùÀÈÌÔÙ ]*$/",($_POST['mod_apellidos_estud']) ) ) // comprueba que sean letras
      		{   $errorZ .= "- Apellido del representado no valido. "; }



      		if (strlen($_POST['mod_email_estud']) >1 ) 
{
			if (strlen($_POST['mod_email_estud']) >59 )  // no sea mayor a 40 caracteres
			{   $errorZ .= "- Email invalido. "; }

			if (!filter_var( ($_POST['mod_email_estud']), FILTER_VALIDATE_EMAIL)) // verifica un formato correcto de email
			{  $errorZ .= "- Email no valido. "; }
}






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





if ($_POST['mod_nombre_plantel_estud'])      // si tiene algo

{ 
		if (strlen($_POST['mod_nombre_plantel_estud']) >40 )  // no sea mayor a 150 caracteres
		{   $errorZ .= "- Nombre del plantel de procedencia invalido. "; }

}	

			


if (strlen($_POST['mod_obs_text']) >750 )  // verifica que el campo obs1 no sea mayor a 750 caracteres
		{  $errorZ .= "- Las observaciones superan los 750 caracteres. "; }





?>