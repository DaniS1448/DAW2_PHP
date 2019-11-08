<?php
require_once "bd.php";
echo implode('|',$bd[$_GET['lang']]);

?>