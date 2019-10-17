<html>
<head>
<title>ejercicio1</title>
<script>

function saludar() {
	var x = new XMLHttpRequest();
	x.open("GET",
			 "ajax.php?nombre="+document.getElementById('idNombre').value
			 +"&apellido="+document.getElementById('idApellido').value,
			  true);
	x.send();
	x.onreadystatechange=function() {
		if (x.readyState==4 && x.status==200) {
			document.getElementById("respuesta").innerHTML=x.responseText;
		}
	}
	
}
</script>
</head>
<body>
<h1>Saludador</h1>
Introduce tu nombre: <input type="text"/>
Introduce tu apellido: <input type="text"/>
<div id="respuesta"></div>
<button onclick="saludar()">Saludar</button>
</body>
</html>