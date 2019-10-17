<?php

// $nombre = $_FILES ['nomF'] ['name'];
// $carpeta = "/tmp/"; //Debe tener “apache” permiso de escritura en ella
// copy ( $_FILES ['nomF'] ['tmp_name'], $carpeta . $nombre );
// echo "El fichero $nombre se almacen&oacute; en $carpeta";


if ($_FILES['fich']['name'] != '') {
    $nombreFichero = $_FILES['fich']['name'];
    $ruta = ('./files/'.($_REQUEST['carpeta']=='txt'?'txt/':'img/').$nombreFichero);
    //echo "la ruta es $ruta";
    copy($_FILES['fich']['tmp_name'], $ruta);
    //echo "El fichero $nombreFichero se ha guardado en $ruta";
    
} else {
    echo "Debes seleccionar un fichero";
}


?>