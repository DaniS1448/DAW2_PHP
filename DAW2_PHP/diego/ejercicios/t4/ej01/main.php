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
				document.getElementById("div").innerHTML=x.responseText;
			}
		}
	}

</script>
</head>

<body>
	<h1>Saludador</h1>
	<form>
		Introduce tu nombre: <input type="text" id="nombre" /><br /> 
		Introduce tu apellido: <input type="text" id="apellido" /><br />
	</form>
	<div id="div"></div>
	<button onclick="saludar()">Saludar</button>
</body>
<?php 
// cargamos el script de ajax con una funcion que envía los parametros por metodo get
// y se recojen en unas variables que se utilizaran en un echo
// este echo se cargará en el div de esta pagina una vez se ejecute la funcion.



?>
