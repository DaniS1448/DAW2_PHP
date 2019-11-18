<?php
mb_internal_encoding ( "UTF-8" );
header('Content-Type: text/html; charset=UTF-8');
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
?>


<?php 
$zodiaco=$_GET["signos"];
$mes=$_GET["mes"];

echo "Signo escogido :$zodiaco <br/>";
echo "Mes escogido :$mes";
?>