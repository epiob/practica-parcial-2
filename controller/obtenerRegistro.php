<?php 

	require_once "../configura/config.php";
	$conexion=conex();

	$id=$_POST['cui'];
	$sql="CALL sp_obtener_registro($id)";

	$result=mysqli_query($conexion,$sql);

	$ver=mysqli_fetch_row($result);

	$datos=array(
			'cuiNU'=>$ver[0],
              'nombreNU'=>$ver[1],
              'fechaNacNU'=>$ver[2],
              'emailNU'=>$ver[3],
			  'direccionNU'=>$ver[4],
			  'nacionalidadNU'=>$ver[5],
			  'departamentoNU'=>$ver[6],
			  'telefonoNU'=>$ver[7],
			  'profesionNU'=>$ver[8],
			  'pretSalarioNU'=>$ver[9]
					);
	echo json_encode($datos);
 ?>