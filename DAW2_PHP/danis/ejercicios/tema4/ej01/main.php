<head>
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
				document.getElementById("divSaludo").innerHTML=x.responseText;
			}
		}
	}

</script>

</head>
<body>
<h1>SALUDAR</h1>
<form>
	Introduce tu nombre: 
	<input type="text" id="nombre"/><br>
	Introduce tu apellido: 
	<input type="text" id="apellido"/>
</form>

<div id="divSaludo"></div>

<button onclick="saludar()">Saludar</button>


</body>