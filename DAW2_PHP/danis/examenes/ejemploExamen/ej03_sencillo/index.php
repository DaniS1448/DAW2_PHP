<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ej3</title>
	<script type="text/javascript">

	function llamada(dato){
		var x = new XMLHttpRequest();
		x.open("GET",
				"ajax.php?dato="+dato,
				true);
		x.send();
		
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