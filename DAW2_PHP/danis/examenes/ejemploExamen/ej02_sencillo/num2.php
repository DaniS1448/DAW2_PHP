<?php
setcookie("num1", $_POST['num1']);
?>

<h3>Introduce otro número</h3>
<form action="resultado.php" method="POST">
<input type="text" name="num2"/> <input type="submit" value="Siguiente"/>
</form>
