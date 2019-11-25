<?php
session_start();
mb_internal_encoding ( "UTF-8" );
header('Content-Type: text/html; charset=UTF-8');
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';


$primera=isset($_POST["primero"])?$_POST["primero"]:null;

if($primera!=null){
    
    $_SESSION["primero"]=$primera;
    
}

?>
<h2>Introduce otro numero</h2><br/>
<form action="pantalla3.php" method="post">
<input type="text" name="segundo"/>
<input type="submit" value="Siguiente"/>
</form>

