<?php
require_once 'conexionBd.php';

$db=conectarMySQL();

$consulta=<<<SQL
    select * from empleados
SQL;

$resultado= $db->query($consulta);

?>
<center>
<h3>Lista de empleados</h3>
<table>
<tr>
	<th>Num Empleado</th>
	<th>Nombre</th>
	<th>Apellido</th>
	<th>Telefono</th>
	<th>Sexo</th>
</tr>

<?php 
foreach($resultado as $empleado){
    echo "<tr>";
    echo "<td>{$empleado['numemp']}</td>";
    echo "<td>{$empleado['nombre']}</td>";
    echo "<td>{$empleado['apellido']}</td>";
    echo "<td>{$empleado['telefono']}</td>";
    echo "<td>{$empleado['sexo']}</td>";
    echo "</tr>";
}
?>

</table>
<a href="menuCrud.php"><button>Volver</button></a>
</center>