<?php
//me guardas en las variables el request. si no esta creado, me lo creas. si lo está, no me haces nada.
$usuario = (isset($_REQUEST['usuario'])?$_REQUEST['usuario']:null);
$bandera = (isset($_REQUEST['bandera'])?$_REQUEST['bandera']:null);
$nVisitas = (isset($_REQUEST['nVisitas'])?$_REQUEST['nVisitas']:null);

$primeraVez = ($usuario==null && $bandera==null && $nVisitas==null);

if ($primeraVez) {
    $mensaje = 'Primera vez';
}
else {
    setcookie($usuario,($nVisitas+1).'#'.$bandera);
    $mensaje = "Adiós $usuario";
}
echo <<<FORM
		<h1>Tratamiento de cookies</h1>
        $mensaje. Usted NO esta conectado <br>
		<form action="./bienvenida.php">
			<label for="lblUsuario">Usuario: </label><input type="text" name="usuario" id="lblUsuario"><br>
            <label for="lblPass">Password: </label><input type="password" name="pwd" id="lblPass"><br>
            <input type="submit">
		</form>
FORM;

?>