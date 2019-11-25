<?php
mb_internal_encoding ( "UTF-8" );
header('Content-Type: text/html; charset=UTF-8');
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';

?>
<h2>Introduce un numero</h2><br/>
<form action="pantalla2.php" method="post">
<input type="text" name="primero"/>
<input type="submit" value="Siguiente"/>
</form>