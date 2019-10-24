<?php
$priNum=isset($_POST['priNum'])?$_POST['priNum']:"";  //Consigo el primero numero y lo guardo en una cookie.
setcookie('priNum',$priNum);
?>
<h3>Introduce otro número</h3>
<form action="resultado.php" method="post">
<input type="text" name="segNum"/>
<input type="submit" value="Siguiente"/>
</form>