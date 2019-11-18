<head>
	<script>

    function traducir() {
    	x = new XMLHttpRequest();
    	var palabra=document.getElementById('palabra').value;
    	var idioma=document.getElementById('idioma').value;
    	x.open("GET","ajax.php?palabra="+palabra+"&idioma="+idioma,true);
    	x.send();
    	x.onreadystatechange = function() {
    		if (x.readyState==4 && x.status==200) {
    			document.getElementById('traduccion').value=x.responseText;
    				
    		}
    	}
    }	

	</script>
</head>
<body>
<h3>Traduccion de palabras</h3>
PALABRA <input type="text" id="palabra"/>
<br>
TRADUCCION <input type="text" id="traduccion" readonly="readonly"/>
<br>
<input type="button" value="Traducir al..." onclick="traducir();"/>
<select id="idioma">
	<option value="es">Español</option>
	<option value="en">Ingles</option>
	<option value="fr">Frances</option>
</select>
<a href="main.php">Volver al diccionario</a>
</body>