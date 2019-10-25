<?php 
require_once("datos.php");
$caSeleccionada = isset($_GET['comunidad'])?$_GET['comunidad']:'AndalucÃ­a';
?>

<head>
	<script type="text/javascript">
	function accionAJAX() {
		var provinciasS = x.responseText;
		provinciasA = provinciasS.split('|');
		sol = '';
		for ( provincia of provinciasA) {
			sol += '<option value="'+provincia+'">'+provincia+'</option>';
		}
		document.getElementById('idProvincias').innerHTML = sol;
		
	}

	
	function refrescar() {
		x = new XMLHttpRequest();
		var ca = document.getElementById("idComunidad").value;
		x.open("GET","ajax.php?ca="+ca,true);
		x.send();
		x.onreadystatechange = function() {
			if (x.readyState==4 && x.status==200) {
					accionAJAX();
			}
		}
	}	
	
	</script>
</head>
<body>
	<h1>Comunidades autónomas</h1>
	ccaa
	<select>
		<?php 
		foreach($bd as $clave=>$valor){
		    
		    echo "<option value=\"$clave\">$clave</option>";
		}
		
		
		?>
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