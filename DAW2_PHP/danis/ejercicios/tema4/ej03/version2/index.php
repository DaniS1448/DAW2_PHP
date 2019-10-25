<head>
<script type="text/javascript">
	function activarFormulario(){

		function modificarBotones(cadena){
			var arrayCadena = cadena.split('|');
			var contador = 0;
			for (texto of arrayCadena){
				document.getElementById("p"+(contador+1)).innerHTML=texto;
				contador++;
			}
		}
		
		var x = new XMLHttpRequest();
		x.open("POST",
				"ajax.php",
				true);
		x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		x.setRequestHeader("X-Requested-With","XMLHttpRequest");
		x.send("pais="+document.querySelector('input[name="pais"]:checked').value);
		
		x.onreadystatechange=function(){
			if(x.readyState == 4 && x.status==200){
				modificarBotones(x.responseText);
			}
		}
	}

</script>

</head>
<body>
    <form id="miFormulario"></form>
    
    <label for="paisES"><img src="../banderas/es.png" width="27px" height="18px"></label>
    <input form="miFormulario" type="radio" name="pais" id="paisES" value="es" />
    
    <label for="paisFR"><img src="../banderas/fr.png" width="27px" height="18px"></label>
    <input form="miFormulario" type="radio" name="pais" id="paisFR" value="fr" />
    
    <label for="paisGB"><img src="../banderas/gb.png" width="27px" height="18px"></label>
    <input form="miFormulario" type="radio" name="pais" id="paisGB" value="gb" />
    
    <hr/>
    
    <table>
    <tr>
    <td><b id="p1">Word</b></td> <td><input form="miFormulario" type="text" /></td>
    </tr>
    <tr>
    <td><b id="p2">Translation</b></td> <td><input form="miFormulario" type="text" /></td>
    </tr>
    <tr>
    <td><button form="miFormulario" type="button" id="p3" style="width:100%" onclick="activarFormulario()">Send</button></td>
    </tr>
    
    </table>
</body>