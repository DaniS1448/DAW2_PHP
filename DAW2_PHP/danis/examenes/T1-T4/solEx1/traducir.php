<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript">

    function traducir(){
    	var x = new XMLHttpRequest();
    	var palabra = document.getElementById("palabra").value;
    	var idioma = document.getElementById("idioma").value;
    	x.open("POST",
    			"ajax.php",
    			true);
    	x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    	x.setRequestHeader("X-Requested-With","XMLHttpRequest");
    	x.send("palabra="+palabra+"&idioma="+idioma);
    	
    	x.onreadystatechange=function(){
    		if(x.readyState == 4 && x.status==200){
    			document.getElementById('traduccion').value=x.responseText;
    		}
    	}
    }

</script>
</head>
<body>
	<h1>Traducción de palabras</h1>
	PALABRA<input type="text" id="palabra"/><br/>
	TRADUCCIÓN<input type="text" id="traduccion" readonly="readonly"/><br/>
	<button onclick="traducir();">Traducir al...</button>
	<select id="idioma" onchange="traducir();">
		<option value="es">Español</option>
		<option value="en">Inglés</option>
		<option value="fr">Francés</option>
	</select>
	<br/>
	<a href="lista.php">Volver al diccionario</a>
</body>