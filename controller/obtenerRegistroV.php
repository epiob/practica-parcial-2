<?php 
	require_once "../configura/config.php";
	$conexion=conex();

	$id=$_POST['cui'];
	$sql="CALL sp_obtener_registroV($id)";

	$result=mysqli_query($conexion,$sql);

	$ver=mysqli_fetch_row($result);	

	$datos=array(
			'cuiNV'=>$ver[0],
              'nombreNV'=>$ver[1],
              'fechaNacNV'=>$ver[2],
              'emailNV'=>$ver[3],
			  'direccionNV'=>$ver[4],
			  'nacionalidadNV'=>$ver[5],
			  'departamentoNV'=>$ver[6],
			  'telefonoNV'=>$ver[7],
			  'profesionNV'=>$ver[8],
			  'pretSalarioNV'=>$ver[9],
					);
	echo json_encode($datos);
 ?>