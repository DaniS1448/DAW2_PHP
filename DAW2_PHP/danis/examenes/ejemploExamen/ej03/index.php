<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ej3</title>
	<script type="text/javascript">

	function llamadaPeli(){
		var x = new XMLHttpRequest();
		x.open("POST",
				"ajax.php",
				true);
		x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		x.setRequestHeader("X-Requested-With","XMLHttpRequest");
		x.send("dato=peli");
		
		x.onreadystatechange=function(){
			if(x.readyState == 4 && x.status==200){
				document.getElementById("peli").value=x.responseText;
			}
		}
	}

	function llamadaCancion(){
		var x = new XMLHttpRequest();
		x.open("POST",
				"ajax.php",
				true);
		x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		x.setRequestHeader("X-Requested-With","XMLHttpRequest");
		x.send("dato=cancion");
		
		x.onreadystatechange=function(){
			if(x.readyState == 4 && x.status==200){
				document.getElementById("cancion").value=x.responseText;
			}
		}
	}

	</script>
</head>
<body>
	<button onclick="llamadaPeli();">Peli favorita</button> <input type="text" id="peli" readonly="readonly"><br>
	<button onclick="llamadaCancion();">Canción favorita</button> <input type="text" id="cancion" readonly="readonly">
</body>
</html>