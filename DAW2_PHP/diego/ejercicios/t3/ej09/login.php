<?php session_start();?>

<h2>LOGIN</h2>
<form action="loginPOST.php" method="post">
Usuario <input type="text" name="usuario" required="required"/><br/>
Contraseña <input type="password" name="pwd" required="required"/><br/>
Recordar <input type="checkbox"><br/>
<input type="submit"/><br/>
</form>
<a href="registrar.php">Registrar nuevo usuario</a>
<br/>
<?php 

echo "Usuarios creados hasta el momento: <br/>";
print_r($_SESSION['usuarios']);

// echo "recorriendo: ";

// foreach($_SESSION['usuarios'] as $array){
//     foreach($array as $key=>$value){
//         echo $value." ".$key."\n";
//     }
// }

?>