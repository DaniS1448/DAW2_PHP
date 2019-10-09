<form enctype="multipart/form-data" action="dani_t17_ficherosPost.php" method="post">
	Escoge un fichero <input type="file" name="fichero"/>
	<br/>
	Escoge una carpeta destino
	<select name="opcion">
		<option value="TEXTO">Texto</option>
		<option value="IMAGEN">Imagen</option>
	</select>
	<br/>
	<input type="submit" value="Subir"/>
</form>