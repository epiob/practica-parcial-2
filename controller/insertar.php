<?php 

	require_once "../configura/config.php";

	$conexion=conex();

	$cui=$_POST['cuiN'];
	$nombre=$_POST['nombreN'];
	$fechaNac=$_POST['fechaNacN'];
	$email = $_POST['emailN'];
	$direccion = $_POST['direccionN'];
	$nacionalidad = $_POST['nacionalidadN'];
	$departamento = $_POST['departamentoN'];
	$telefono = $_POST['telefonoN'];
	$profesion = $_POST['profesionN'];
	$pretSalario = $_POST['pretSalarioN'];


	$sql="CALL sp_insertar_datos('$cui','$nombre','$fechaNac','$email', '$direccion',
	'$nacionalidad', '$departamento', '$telefono', '$profesion', '$pretSalario' )";

	echo mysqli_query($conexion,$sql);

 ?>