<script type="text/javascript">
function traducir() {
	x = new XMLHttpRequest();
	var palabra = document.getElementById("palabra").value;
	var idioma = document.getElementById("idioma").value;
	x.open("GET","ajax.php?palabra="+palabra+"&idioma="+idioma,true);
	x.send();
	x.onreadystatechange = function() {
		if (x.readyState==4 && x.status==200) {
		document.getElementById("traduccion").value = x.responseText;
				
		}
	}
}
</script>

<h1>Traducción de Palabras</h1>

PALABRA <input type ="text" id ="palabra"/>
TRADUCCION <input type ="text" id ="traduccion"/>
<input type ="button" id ="traducir" onclick ="traducir()" value ="Traducir al ..."/>
<select id ="idioma">
	<option value ="es">Español</option>
	<option value ="uk">Inglés</option>
	<option value ="fr">Francés</option>
</select>

<a href = "anadirDiccionario.php">Volver al diccionario</a>
