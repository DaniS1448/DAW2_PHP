<?php

session_start();

$_activo = (isset($_SESSION['_activo'])?$_SESSION['_activo']:null);
$_recordar = (isset($_SESSION['_recordar'])?$_SESSION['_recordar']:null);

$hayRecordar = ($_activo!=null && $_recordar!=null && $_SESSION['_recordar']==true);

$usuario='';
if ($hayRecordar) {
    $usuario=$_SESSION['_activo'];
}

$recorar_checked='';
if ($_recordar != null && $_SESSION['_recordar']==true ) {
    $recorar_checked = 'checked=\"checked\"';
}

echo <<<FORM
		<h1>LOGIN</h1>
		<form action="./loginPost.php" method="post">
			<label for="lblUsuario">Usuario: </label><input type="text" name="usuario" value="$usuario" id="lblUsuario" required="required"><br>
            <label for="lblPass">Contrase&ntilde;a: </label><input type="password" name="pwd" id="lblPass" required="required"><br>
            <label for="lblRecordar">Recordar </label><input type="checkbox" name="rec" id="lblRecordar" $recorar_checked><br>
            <input type="submit">
		</form>
        
        <a href="registrar.php">Registrar nuevo usuario</a>
FORM;

?>