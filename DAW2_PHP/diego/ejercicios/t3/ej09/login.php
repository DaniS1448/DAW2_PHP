<?php

session_start();

if (! isset($_SESSION['_recordar'])) {
    $_SESSION['_recordar'] = false;
}

$recordar = "";
$recordarNombre = "";
if ($_SESSION['_recordar'] == true) {
    $recordar = "checked=\'checked\'";
    $recordarNombre = "value=\"".$_SESSION['_activo']."\"";
}

// if  ($_SESSION['_recordar']==false){
//     echo "es falso";
// } else {
//     echo "es true<br/>";
//     echo $_SESSION['_activo']."<br/>";
//     echo $recordarNombre."<br/>";
// }

?>

<h2>LOGIN</h2>
<form action="loginPost.php" method="post">
	Nombre: <input type="text" name="nombre" <?= $recordarNombre?> required="required" /><br />
	Password: <input type="password" name="pwd" required="required" /><br />
	Recordar<input type="checkbox" name="recordar" <?= $recordar ?>/><br />
	<input type="submit" value="enviar" /><br />
</form>
<a href="registrar.php">Registra nuevo usuario</a>
