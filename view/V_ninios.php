<!doctype html>
<html>
<head>
    <!-- <title>Conexion con base de datos de Niños </title> -->
     
</head>

<body>
    
<h1>Lista</h1>
    <h2><?php echo $cata["titulo"]; ?> </h2> 

    <!-- Hacemos la tabla para desplegar datos -->
        <table>
            <thead>
                <tr>
                    <th>CUI</th>
                    <th>Nombre</th>
                    <th>Fecha Nacimiento</th>
                    <th>Email</th>
                    <td>Direccion</td>
			<td>Nacionalidad</td>
			<td>Departamento</td>
			<td>Telefono</td>
			<td>Profesion</td> 
			<td>Pret Salario</td>
                </tr>
            </thead>

            <tbody>
                <?php 
                    foreach($cata["ninios"] as $cato){
                    echo "<tr>";
                    echo "<td>".$cato["cui"]."</td>";
                    echo "<td>".$cato["nombre"]."</td>";
                    echo "<td>".$cato["fechaNac"]."</td>";
                    echo "<td>".$cato["email"]."</td>";
                    echo "<td>".$cato["direccion"]."</td>";
                    echo "<td>".$cato["nacionalidad"]."</td>";
                    echo "<td>".$cato["departamento"]."</td>";
                    echo "<td>".$cato["telefono"]."</td>";
                    echo "<td>".$cato["profesion"]."</td>";
                    echo "<td>".$cato["pretSalario"]."</td>";
                    echo "</tr>";
                    }
                ?>
            </tbody>
            
        </table> 
</body>

</html>