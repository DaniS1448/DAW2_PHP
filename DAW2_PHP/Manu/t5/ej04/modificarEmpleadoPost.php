<?php
require_once 'conexionBd.php';

$numemp=isset($_POST['numemp'])?$_POST['numemp']:"";

$db=conectarMySQL();

$consulta=<<<SQL
    select * from empleados where numemp=$numemp
SQL;

if ($resultado= $db->query($consulta)):
foreach($resultado as $e){
    $empleado=$e;
}?>    
    <h3>Datos del empleado</h3>
    <form action="modEmpBd.php" method="post">
    Nombre: <input type="text" name="nombre" required="required" value="<?=$empleado['nombre'] ?>"/>
    <br>
    Apellido: <input type="text" name="apellido" required="required" value="<?=$empleado['apellido'] ?>"/>
    <br>
    Telefono: <input type="text" name="tlf" minlength="9" maxlength="9" required="required" value="<?=$empleado['telefono'] ?>"/>
    <br>
    Sexo [ H / M ]: <input type="text" name="sexo" maxlength="1" required="required" value="<?=$empleado['sexo'] ?>"/>
    <br>
    <input type="hidden" name="numemp" value="<?=$numemp?>"/>
    <input type="submit" value="Modificar"/>
    </form>
<?php else:?>
	<h3>No se ha encontrado el empleado introducido</h3>
<?php endif;?>

