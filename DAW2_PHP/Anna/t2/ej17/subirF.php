<?php
$nombre = $_FILES ['f'] ['name'];
//$carpeta = "../../ficheros/"; //Debe tener “apache” permiso de escritura en ella
$carpeta = "tmp/".$_REQUEST['carpeta']."/";
copy ( $_FILES ['f'] ['tmp_name'], $carpeta.$_FILES['f']['name'] );
echo "El fichero $nombre se almacena en $carpeta";
//echo $carpeta;
?>