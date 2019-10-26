<head>
	<script 
		type="text/javascript" 
		src="https://storage.googleapis.com/google-code-archive-downloads/v2/code.google.com/form-serialize/serialize-0.2.min.js" >
	</script>

	<script type="text/javascript">
	function refrescar() {
		var x = new XMLHttpRequest();
		var pepe= serialize(document.getElementById("datos"));
		x.open("GET",
				"ajax.php?"+pepe,
				true);
		x.send();
		x.onreadystatechange = function() {
			if (x.readyState==4 && x.status==200) {
					document.getElementById("respuesta").innerHTML = x.responseText;
			}
		}
	}
	</script>
</head>
<body>
	<h1>SALUDADOR</h1>

	
	<form id="datos">
    	Introduce tu nombre
    	<input type="text" name="nombre"/><br/>
    	
    	Introduce tu apellido
    	<input type="text" name="apellido"/><br/>
    	
    	Introduce tu país de origen
    	<input type="text" name="pais"/><br/>

    	Introduce LO QUE TE APETEZCA
    	<input type="text" name="varios"/><br/>
	</form>

	<div id="respuesta"></div>
	<button onclick="refrescar()">Saludar</button>
</body>