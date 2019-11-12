<head>
<script type="text/javascript">
	function cambiar(){
		var x = new XMLHttpRequest();
		x.open("GET",
				"ajax.php?idioma="+document.querySelector('input[name="flags"]:checked').value,
				true);
		x.send();

		x.onreadystatechange=function(){
			if(x.readyState == 4 && x.status==200){
				
				var cadenaArray=x.responseText;
				var array=cadenaArray.split("/");
				document.getElementById("n1").innerHTML=array[0];
				document.getElementById("n2").innerHTML=array[1];
				document.getElementById("n3").value=array[2];
				
			}
		}
	}

</script>
</head>
<body>
<form>
Español <input type="radio" name="flags" value="ES" onclick="cambiar()"> 
Inglés <input type="radio" name="flags" value="EN" onclick="cambiar()" checked="checked"> 
Francés <input type="radio" name="flags" value="FR" onclick="cambiar()">
<hr>
<span id="n1">Word:</span> <input type="text">
<br/>
<span id="n2">Translation: </span> <input type="text">
<br/>
<input type="button" value="Send" id="n3">
</form>
</body>

<?php 
// para la funcion usaremos el codigo que proporciona el profesor en el ejercicio
// si el resultado de esa funcion es correcto, nos devolvera de la manera que indiquemos el contenido de ajax.php
// hemos usado span para poder editar el id de lo que contiene
// n hace referencia al valor del array que hemos separado con el split (por ser javascript)


?>