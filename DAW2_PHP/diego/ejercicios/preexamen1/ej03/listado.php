<head>
<script type="text/javascript">
	function peli(){
		var x = new XMLHttpRequest();
		x.open("GET","ajaxpelis.php",true);
		x.send();
		x.onreadystatechange=function(){
			if(x.readyState == 4 && x.status==200){
				document.getElementById("peli").value=x.responseText;
			}
		}
	}
	function cancion(){
		var x = new XMLHttpRequest();
		x.open("GET","ajaxcanciones.php",true);
		x.send();
		x.onreadystatechange=function(){
			if(x.readyState == 4 && x.status==200){
				document.getElementById("cancion").value=x.responseText;
			}
		}
	}
</script>
</head>
<body>
	<input type="button" value="Peli favorita" onclick="peli();">
	<input type="text" id="peli" readonly="readonly">
	<br />
	<input type="button" value="Canción favorita" onclick="cancion();">
	<input type="text" id="cancion" readonly="readonly">
	<br />
</body>