<?php 
session_start();
$_SESSION['usuario']=[];
$_SESSION['usuario']+= ['manu' => 'manu'];
$_SESSION['usuario']+= ['diego' => 'diego'];

?>

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
<form action="indexPost.php" method="post">
<img src="img/es.png" width="50" height="30"> 
<input type="radio" name="flags" value="ES" onclick="cambiar()" checked="checked"> 
<img src="img/gb.png" width="50" height="30"> 
<input type="radio" name="flags" value="EN" onclick="cambiar()"> 
<hr>
<span id="n1">Usuario:</span> <input type="text" name="usuario">
<br/>
<span id="n2">Contraseña</span> <input type="text" name="pwd">
<br/>
<input type="submit" value="Entrar" id="n3">
</form>
</body>