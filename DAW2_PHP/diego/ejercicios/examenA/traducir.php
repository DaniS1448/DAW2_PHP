<script>

function traducir(){

	var palabra = document.getElementById('palabra').value;
	var idioma = document.getElementById('idioma').value;
	
	var x = new XMLHttpRequest();
	x.open("GET",
			"ajax.php?palabra="+palabra+"&idioma="+idioma,
			true);
	x.send();

	x.onreadystatechange=function(){
		if(x.readyState == 4 && x.status==200){
			
			document.getElementById('traduccion').value=x.responseText;
			
		}
	}
}
</script>
<h3>Traducción de palabras</h3>

PALABRA <input type="text" id="palabra"><br>
TRADUCCIÓN <input type="text" id="traduccion" size=30><br>
<input type="button" value="Traducir al..." onclick="traducir()">
<select id="idioma">
	<option value="es">Español</option>
	<option value="en">Inglés</option>
	<option value="fr">Francés</option>
</select><br>
<a href="main.php">Volver al menú principal</a>
