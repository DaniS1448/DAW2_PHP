<?= <<<principal
<h4>Listado de cookies por nivel</h4>

Nivel0 --> <a href="listadoCookies.php">Listado de cookies</a><br/>
Nivel0 --> Nivel1 --> <a href="nivel1/listadoCookies.php">Listado de cookies</a><br/>
Nivel0 --> Nivel1 --> Nivel2 --> <a href="nivel1/nivel2/listadoCookies.php">Listado de cookies</a><br/><br/>

<b>Creación de cookies en diferentes niveles (directorios) por un script ubicado en /</b></br>
Se permite fijar nombre y contenido de la cookie, asi como el nivel. <br/><br/>

<fieldset>
<legend>Creación de cookie</legend>
<form action="cookies.php" method="get">
    Nombre <input type="text" name="nombre" id="nombre"/>
    Contenido <input type="text" name="contenido" id="contenido"/><br/>
    Nivel     <select name="nivel">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
    </select>
    <input type="submit" value="Crea cookie"/>
</fieldset>

principal;
//el action nos lleva a cookies.php y alli recogemos con $_GET nombre y contenido
//los input y select los recogemos con el name en cookies.php
// la opcion seleccionada se recoge con value
// el archivo de listar es igual en todas las carpetas, solo hay q cambiar la ruta de destino
?>