<?php 
$nombre=isset($_GET['nombre'])?$_GET['nombre']:"";
$apellido=isset($_GET['apellido'])?$_GET['apellido']:"";
$tlf=isset($_GET['tlf'])?$_GET['tlf']:"";
$sexo=isset($_GET['sexo'])?$_GET['sexo']:"";
?>

<h2>Añadir empleado</h2>
<form action="addEmpleadoPost.php" method="post">
Nombre: <input type="text" name="nombre" required="required" value="<?=$nombre ?>"/>
<br>
Apellido: <input type="text" name="apellido" required="required" value="<?=$apellido ?>"/>
<br>
Telefono: <input type="text" name="tlf" minlength="9" maxlength="9" required="required" value="<?=$tlf ?>"/>
<br>
Sexo [ H / M ]: <input type="text" name="sexo" maxlength="1" required="required" value="<?=$sexo ?>"/>
<br>
<input type="submit" value="Añadir"/>

</form>
<a href="menuCrud.php"><button>Volver</button></a>