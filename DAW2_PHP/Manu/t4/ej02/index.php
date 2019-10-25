<head>
	<script type="text/javascript">
	function saludar(){
		
		var x=new XMLHttpRequest();
		x.open("GET","ajax.php",true);
		x.send();
		x.onreadystatechange= function(){
			if (x.readyState==4 && x.status==200){
				document.getElementById("optionV").value= x.responseText;
			}
		}
		}
	
	</script>
</head>
<body>
	<h1>Comunidades autónomas</h1>
	ccaa
	<select>
		<option id="optionV"></option>
	</select>
	
	<br>
	
	provincias
	<select>
		<option></option>
	</select>
	<br>
	<h3>Escoge una comunidad autónoma</h3>
	Observa el cambio de provincias vía AJAX
</body>