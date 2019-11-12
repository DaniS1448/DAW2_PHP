<?php

session_start();
// si recordar no esta creado, lo crea con valor false
if (! isset($_SESSION['_recordar'])) {
    $_SESSION['_recordar'] = false;
}

$recordar = "";
$recordarNombre = "";
// si recordar tiene valor true es que se ha logueado anteriormente
if ($_SESSION['_recordar'] == true) {
    // entonces inyectará un checked en el html para recordar al usuario
    $recordar = "checked=\'checked\'";
    // y tambien el nombre del usuario activo
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
