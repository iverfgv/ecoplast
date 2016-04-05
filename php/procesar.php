<?php
	$opcion=$_POST['menu'];

if(isset($_POST['n1']) && !empty($_POST['n1']) &&
   isset($_POST['n2']) && !empty($_POST['n2']) &&
   isset($_POST['n3']) && !empty($_POST['n3']))
{
	switch ($opcion) {
		case 'suma':
				echo "El resultado es: ".($_POST['n1']+$_POST['n2']+$_POST['n3']);
			break;

		case 'resta':
				echo "El resultado es: ".($_POST['n1']-$_POST['n2']-$_POST['n3']);
			break;

		case 'multiplicacion':
				echo "El resultado es: ".($_POST['n1']*$_POST['n2']*$_POST['n3']);
			break;

		
		default:
				echo "Opcion del menu no valida";
			break;
	}
}


else
{
	echo "Debe llenar todos los campos";
}
?>