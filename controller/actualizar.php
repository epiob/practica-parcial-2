<?php 

	require_once "../configura/config.php";

	$conexion=conex();

	$cui=$_POST['cuiNU'];
	$nombre=$_POST['nombreNU'];
	$fechaNac=$_POST['fechaNacNU'];
	$email = $_POST['emailNU'];
	$direccion = $_POST['direccionNU'];
	$nacionalidad = $_POST['nacionalidadNU'];
	$departamento = $_POST['departamentoNU'];
	$telefono = $_POST['telefonoNU'];
	$profesion = $_POST['profesionNU'];
	$pretSalario = $_POST['pretSalarioNU'];

	$sql="CALL sp_actualizar_datos(	'$nombre',
									'$fechaNac',
									'$email',
									'$direccion',
									'$nacionalidad',
									'$departamento',
									'$telefono',
									'$profesion',
									'$pretSalario',
									'$cui'									
									)";
									
	echo mysqli_query($conexion,$sql);
 ?>