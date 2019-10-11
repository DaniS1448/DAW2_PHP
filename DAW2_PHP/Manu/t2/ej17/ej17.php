<?php
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
?>