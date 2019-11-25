<?php
setcookie("num1", $_POST['num1']);
?>

<h3>Introduce otro numero</h3>
<form action="resultado.php" method ="post">
<input type ="text" name ="num2"/>
<input type ="submit" value ="Siguiente"/>
</form>