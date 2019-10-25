<?php 
session_start();
//$_SESSION+=["_activo"=>null,"_recordar"=>null,"usuarios"=>["manu"=>["pwd"=>"manu","mensajes"=>[['remitente'=>null,'fecha'=>null,'texto'=>null]]]]];

if (!isset($_SESSION['_activo'])){
    $_SESSION['_activo']=null;
}
if (!isset($_SESSION['_recordar'])){
    $_SESSION['_recordar']=false;
}
if (!isset($_SESSION['usuarios'])){
    $_SESSION['usuarios']=[];
}

$recordarCheck="";
$recordarUsu="";
if ($_SESSION['_recordar']==true){
    $recordarCheck="checked=\"checked\"";
    $recordarUsu="value=\"".$_SESSION['_activo']."\"";
}



?>
<h1>LOGIN</h1>
        <form action="loginPost.php" method="post">
            Usuario<input type="text" name="usuario" <?= $recordarUsu ?>required="required"/><br>
            Contraseña<input type="password" name="clave" required="required"/><br>
            Recordar<input type="checkbox" name="recordar" <?= $recordarCheck ?>/><br>
            <input type="submit" value="Enviar"/>
            <br>
            <br>
            <a href="registrar.php">Registrar nuevo usuario</a>
        </form>