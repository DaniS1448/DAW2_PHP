<h3>Listado de cookies por nivel</h3>
<br/>
Nivel0 --> <a href="dani_t3_ej03_listado.php">Listado de cookies</a>
<br/>
Nivel0 --> Nivel1 --> <a href="uno/">Listado de cookies</a>
<br/>
Nivel0 --> Nivel1 --> Nivel2 --> <a href="uno/dos">Listado de cookies</a>
<h4>Creación de cookies en diferentes niveles (directorios) por un script ubicado en /<br/>Se permite fijar nombre y contenido de la cookie, así como el nivel</h4>

<form action="dani_t3_ej03_Post.php">
	<fieldset>
  		<legend>Creación de cookie</legend>
        Nombre<input type="text" name="nombre"/>Contenido<input type="text" name="contenido"/>
        <br/>
        Nivel
        <select name="nivel">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
        </select>
        <input type="submit" value="Crear cookie"/>
    </fieldset>
</form>