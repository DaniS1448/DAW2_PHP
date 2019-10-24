<?php
require_once 'bd.php';

$user = isset($_POST['inUser'])?$_POST['inUser']:null;
$pais = isset($_POST['pais'])?$_POST['pais']:'es';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<script>
		function jugar(){
			var num = Number(document.getElementById("inNum").value);
			var aleatorio = Math.floor(Math.random() * (10 + 1 - 1) + 1);
			var arrayEtiquetas = JSON.parse( '<?php echo json_encode($textoJugar) ?>' );
			var pais = document.querySelector('input[name="lastLang"]:checked').value;

			document.getElementById("p2").innerHTML=arrayEtiquetas[pais][2] +": "+num+"<br>";
			document.getElementById("p3").innerHTML=arrayEtiquetas[pais][3] +": "+aleatorio;
			
			if(num>aleatorio){
				document.getElementById("p4").innerHTML=arrayEtiquetas[pais][4];
			} else if (num < aleatorio){
				document.getElementById("p4").innerHTML=arrayEtiquetas[pais][5];
			} else if (num == aleatorio){
				document.getElementById("p4").innerHTML=arrayEtiquetas[pais][6];
			}
		}

		function activarFormulario(){
			var arrayEtiquetas = JSON.parse( '<?php echo json_encode($textoJugar) ?>' );

		    var pais = document.querySelector('input[name="lastLang"]:checked').value;
		    
		    document.getElementById("p0").innerHTML=arrayEtiquetas[pais][0];
		    document.getElementById("p1").innerHTML=arrayEtiquetas[pais][1];
		    document.getElementById("p7").innerHTML=arrayEtiquetas[pais][7];
		    
		    var contenido2 = document.getElementById("p2").textContent;
		    var contenido3 = document.getElementById("p3").textContent;
		    var contenido4 = document.getElementById("p4").textContent;
		    
		    if(contenido2 != ''){
		    	document.getElementById("p2").innerHTML=arrayEtiquetas[pais][2] + ': ' + contenido2.charAt(contenido2.length - 1)+"<br>";
		    	document.getElementById("p3").innerHTML=arrayEtiquetas[pais][3] + ': ' + contenido3.charAt(contenido3.length - 1);
		    }
		    
		    if(contenido4 == arrayEtiquetas['gb'][4] || contenido4 == arrayEtiquetas['es'][4]){
		    	document.getElementById("p4").innerHTML=arrayEtiquetas[pais][4];
		    } else if(contenido4 == arrayEtiquetas['gb'][5] || contenido4 == arrayEtiquetas['es'][5]){
		    	document.getElementById("p4").innerHTML=arrayEtiquetas[pais][5];
		    } else if(contenido4 == arrayEtiquetas['gb'][6] || contenido4 == arrayEtiquetas['es'][6]){
		    	document.getElementById("p4").innerHTML=arrayEtiquetas[pais][6];
		    }
		    

		    
		}
	</script>
</head>
<body>
    <label for="paisES"><img src="banderas/es.png" width="27px" height="18px"></label>
    <input form="miFormulario" type="radio" name="lastLang" id="paisES" value="es" <?= $pais=='es'?'checked="checked"':'' ?> onclick="activarFormulario()"/>
    
    <label for="paisGB"><img src="banderas/gb.png" width="27px" height="18px"></label>
    <input form="miFormulario" type="radio" name="lastLang" id="paisGB" value="gb" <?= $pais=='gb'?'checked="checked"':'' ?> onclick="activarFormulario()"/>
    <br>
	<span id="p0"><?= $textoJugar[$pais][0] ?></span> <input type="text" id="inNum"/><br>
	<button id="p1" onclick="jugar()"><?= $textoJugar[$pais][1] ?></button>
	
	<div id="numeros">
		<span id="p2"></span>	
		<span id="p3"></span>
	</div>
	<div id="resultado">
			<span id="p4"></span>
	</div>
	
		<form id="miFormulario" action="index.php" method="post">
        <input type="hidden" name="lastUser" value="<?= $user ?>"/>
        <button id="p7" form="miFormulario" type="submit"><?= $textoJugar[$pais][7] ?></button>
        </form>
</body>
</html>