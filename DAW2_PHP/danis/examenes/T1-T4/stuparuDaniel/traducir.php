<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript">

    function traducir(){
    	var x = new XMLHttpRequest();
    	x.open("POST",
    			"ajax.php",
    			true);
    	x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    	x.setRequestHeader("X-Requested-With","XMLHttpRequest");
    	x.send("palabra="+document.getElementById("idPalabra").value+"&idioma="+document.getElementById("idIdioma").value);
    	
    	x.onreadystatechange=function(){
    		if(x.readyState == 4 && x.status==200){
    			document.getElementById('idTraduccion').value=x.responseText;
    		}
    	}
    }

</script>
</head>
<body>
	<h1>Traducción de palabras</h1>
	PALABRA<input type="text" id="idPalabra"/><br/>
	TRADUCCIÓN<input type="text" id="idTraduccion" readonly="readonly"/><br/>
	<button onclick="traducir();">Traducir al...</button>
	<select id="idIdioma" onchange="traducir();">
		<option value="es">Español</option>
		<option value="en">Inglés</option>
		<option value="fr">Francés</option>
	</select>
	<br/>
	<a href="index.php">Volver al diccionario</a>
</body>