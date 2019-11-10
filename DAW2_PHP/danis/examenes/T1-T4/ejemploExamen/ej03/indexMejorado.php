<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ej3</title>
	<script type="text/javascript">

	function llamada(dato){
		var x = new XMLHttpRequest();
		x.open("POST",
				"ajax.php",
				true);
		x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		x.setRequestHeader("X-Requested-With","XMLHttpRequest");
		x.send("dato="+dato);
		
		x.onreadystatechange=function(){
			if(x.readyState == 4 && x.status==200){
				document.getElementById(dato).value=x.responseText;
			}
		}
	}

	</script>
</head>
<body>
	<button onclick="llamada('peli');">Peli favorita</button> <input type="text" id="peli" readonly="readonly"><br>
	<button onclick="llamada('cancion');">Canción favorita</button> <input type="text" id="cancion" readonly="readonly">
</body>
</html>