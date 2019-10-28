<?php 
$n1 =$_POST['n1'];

setcookie('n1', $n1);



?>
<h1>Introduce otro número</h1>
<form action="resultado.php" method="post">
<input type="text" name="n2">
<input type="submit" value="Siguiente">
</form>