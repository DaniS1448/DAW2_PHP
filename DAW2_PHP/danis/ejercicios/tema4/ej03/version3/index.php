<head>
<script type="text/javascript">

	function activarFormulario(){
		var arrayEtiquetas = {
				'es': new Array("Palabra", "Traducción", "Enviar"),
		        'gb': new Array("Word", "Translation", "Send"),
		        'fr': new Array("Mot", "Traduction", "Envoyer")
	    };

	    var pais = document.querySelector('input[name="pais"]:checked').value;

	    var arrayCadena = arrayEtiquetas[pais];
		var contador = 0;
		for (texto of arrayCadena){
			document.getElementById("p"+(contador+1)).innerHTML=texto;
			contador++;
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