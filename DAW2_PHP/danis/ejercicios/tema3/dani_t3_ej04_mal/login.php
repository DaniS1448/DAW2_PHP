<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]['estado']) && $_SESSION["loggedin"]['estado']=="false"){
  header("location: index.php");
  exit;
} else {
    $comprobadorUser=false;
    $comprobadorPass=false;
    if (isset($_POST['user']) && !empty(($_POST['user']))) {
        $usuario=($_POST['user']);
        $comprobadorUser=true;
    }
    if (isset($_POST['pass']) && !empty(($_POST['pass']))) {
        $contrasena=($_POST['pass']);
        $comprobadorPass=true;
    }
    if ($comprobadorUser && $comprobadorPass) {
        $_SESSION["loggedin"]=['user'=>$usuario, 'pass'=> $contrasena, 'estado'=>true];
        header('Location: '.$_SERVER['REQUEST_URI']);
    }
    
}
?>


<h2>Tratamiento de cookies</h2>

Primera ejecución. Usted no está conectado.
<br/>
<form action="login.php" method="post">
Usuario<input type="text" name="user"/><br/>
Contraseña<input type="password" name="pass"/><br/>
<input type="submit" value="Autenticar"/>
</form>
