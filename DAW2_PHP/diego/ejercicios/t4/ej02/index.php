<head>
<script type="text/javascript">

	var x;

	function acionAJAX() {

		var provinciasS=x.responseText;
		provinciasA=provinciasS.split('|');
		sol = '';
		for (provincia of provinciasA) {
			sol+='<option value="'+provincia+'">'+provincia+'</option>';
		}
		document.getElementById8'idProvincias').innerHTML=sol;
	}

	function refrescar(){
		
		x = new XMLHttpRequest();
		var ca = document.getElementById('idComunidad').value;
		x.open("GET", "ajax.php?ca="+ca, true);
		x.send();

		x.onreadystatechange=function(){
			if(x.readyState == 4 && x.status==200){
				//document.getElementById("div").innerHTML=x.responseText;
			}
		}
	}

</script>
</head>
<body>
<h2>COMUNIDADES AUTÓNOMAS</h2>

ccaa 		<select>
				<option name="" value=""></option>
			</select><br/>
	
provincias 	<select>
				<option name="" value=""></option>
			</select><br/>
			
<h3>Escoge una comunidad autónoma</h3>
Observa el cambio de provincias vía AJAX


</body>