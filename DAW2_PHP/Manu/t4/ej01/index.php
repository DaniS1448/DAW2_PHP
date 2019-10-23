
<head>
	<script type="text/javascript">
	function saludar(){
		var nombre=document.getElementById("nombre").value;
		var apell=document.getElementById("apell").value;
		var x=new XMLHttpRequest();
		x.open("GET","ajax.php?nombre="+nombre+"&apell="+apell,true);
		x.send();
		x.onreadystatechange= function(){
			if (x.readyState==4 && x.status==200){
				document.getElementById("textoSaludo").innerHTML= x.responseText;
			}
		}
		}
	
	</script>
</head>
<body>
	<h1>SALUDADOR</h1>
	<div id="textoSaludo"></div>
	Nombre:<input type="text" name="nombre" id="nombre"/><br>
	Apellido:<input type="text" name="apell" id="apell"/><br>
	<button onclick="saludar()">Saludar</button>
</body>
