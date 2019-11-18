<?php
mb_internal_encoding ( "UTF-8" );
header('Content-Type: text/html; charset=UTF-8');
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
?>

<form action="zodiaco.php">
<h2>Introduce dos numeros entre el 1 y el 12</h2>
Cota inferior <input type="text" name="inferior" /><br/>
Cota superior <input type="text" name="superior" /><br/>
<input type="submit" name="continuar" />
</form>