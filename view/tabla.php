<?php 
	require_once "../configura/config.php";
	$conexion=conex();

	$sql="CALL sp_mostrar_datos";
	$result=mysqli_query($conexion,$sql);
 ?>
 <br>

<span class="btn btn-raised btn-primary btn-lg" data-toggle="modal" data-target="#addmodal">
			<span class="fa fa-plus-circle"></span> agrega nuevo
		</span>

<table id="example" class="table table-sm table-inverse table-bordered">
		<tr style="font-weight: bold" >
			<td>Nombre</td>
			<td>Departamento</td>
			<td>Telefono</td>
			<td>Profesion</td> 
			<td>Pret Salario</td>
			<td style="text-align: center;">Ver</td>
			<td style="text-align: center;">Editar</td>
			<td style="text-align: center;">Eliminar</td>
		</tr>
	<?php 

		while ($ver=mysqli_fetch_row($result)):
	 ?>
		<tr>
			<td><?php echo $ver[1]; ?></td>
			<td><?php echo $ver[6]; ?></td>
			<td><?php echo $ver[7]; ?></td>
			<td><?php echo $ver[8]; ?></td>
			<td><?php echo $ver[9]; ?></td>
			<td style="text-align: center;">
				<span class="btn btn-raised btn-success btn-xs" 
				onclick="obtenDatosV('<?php echo $ver[0]; ?>')" data-toggle="modal" data-target="#curriculum">
					<span class="fa fa-address-card"></span> Ver
				</span>
			</td>
			<td style="text-align: center;">
				<span class="btn btn-raised btn-warning btn-xs" 
				onclick="obtenDatos('<?php echo $ver[0]; ?>')" data-toggle="modal" data-target="#updatemodal">
					<span class="fa fa-pencil-square-o"></span> Editar
				</span>
			</td>
			<td style="text-align: center;">
				<span class="btn btn-raised btn-danger btn-xs" 
					onclick="elimina('<?php echo $ver[0]; ?>')">
					<span class="fa fa-trash"></span> Eliminar
				</span>
			</td>
		</tr>

		<?php 
			endwhile;
		 ?>
</table>