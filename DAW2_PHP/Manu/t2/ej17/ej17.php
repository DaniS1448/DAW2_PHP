<?php
/*
$archivo= (isset($_FILES['file'])) ? $_FILES['file'] : null;
if ($archivo){
    $rutaDestino = "files/{$_REQUEST['carpeta']}/{$archivo['name']}";
    $archivo_ok = move_uploaded_file($archivo['tmp_name'], $rutaDestino);
}
if ($archivo_ok){
    echo "<h2>Se ha subido el archivo</h2>";
}else{
    echo "<h2>No se ha podido subir el archivo</h2>";
}
 -------------------------------------------------------------------------Mio ^          Profe v
if (copy ( $_FILES ['file'] ['tmp_name'], 'files/'.($_REQUEST['carpeta']=='txt'?'txt':'img').'/'.$_FILES['file']['name'] )){
    echo '<h1>FICHERO COPIADO</h1>';
} else {
    echo '<h1>FICHERO NO COPIADO</h1>';
}
*/

if ($_FILES['fich']['name'] != '') {
    $nombreFichero = $_FILES['fich']['name'];
    $ruta = ('./files/'.($_REQUEST['carpeta']=='txt'?'txt/':'img/').$nombreFichero);
    echo "la ruta es $ruta";
    copy($_FILES['fich']['tmp_name'], $ruta);
    echo "El fichero $nombreFichero se ha almacenado en $ruta";
    
} else {
    echo "Debes seleccionar un fichero";
}

?>