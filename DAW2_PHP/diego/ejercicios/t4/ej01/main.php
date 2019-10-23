<html>
<head>
<title>ejercicio1</title>

<script type="text/javascript">
	function saludar(){
		var x = new XMLHttpRequest();
		x.open("GET",
				"ajax.php?nombre="+document.getElementById("nombre").value
				+"&apellido="+document.getElementById("apellido").value,
				true);
		x.send();

		x.onreadystatechange=function(){
			if(x.readyState == 4 && x.status==200){
				document.getElementById("div").innerHTML=x.responseText;
			}
		}
	}

</script>
</head>
<body>
<h1>Saludador</h1>
<form id="formulario" method="get">
Introduce tu nombre: <input type="text" id="nombre"/><br/>
Introduce tu apellido: <input type="text" id="apellido"/><br/>
<button onclick="saludar()">Saludar</button>
<div id="div"></div>

</form>
</body>
</html>