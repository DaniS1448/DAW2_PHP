<?php

/* if ($_FILES['fichero']['name'] != '') {
    $nombreFichero = $_FILES['fichero']['name'];
    
    if ($_POST['opcion'] == 'TEXTO') {
        $ruta = "./files/txt/$nombreFichero";
    } else {
        $ruta = "./files/img/$nombreFichero";
    }
    
    copy($_FILES['fichero']['tmp_name'], $ruta);   
    echo "El fichero $nombreFichero se ha almacenado en $ruta";

} else {
    echo "Debes seleccionar un fichero";
} */

if ($_FILES['fichero']['name'] != '') {
    $nombreFichero = $_FILES['fichero']['name'];
    $ruta = ('./files/'.($_POST['opcion']=='TEXT'?'txt/':'img/').$nombreFichero);
    echo "la ruta es $ruta";
    copy($_FILES['fichero']['tmp_name'], $ruta);
    echo "El fichero $nombreFichero se ha almacenado en $ruta";
    
} else {
    echo "Debes seleccionar un fichero";
}

?>