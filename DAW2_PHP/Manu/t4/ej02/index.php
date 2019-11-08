<?php 
require_once("datos.php");
$caSeleccionada = isset($_GET['comunidad'])?$_GET['comunidad']:'Andalucía';
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
	<select name="comunidad" onchange="refrescar()" id="idComunidad">
		<?php 
		foreach($bd as $ca=>$provincias):?>		
		    
		   <option value="<?=$ca?>" <?= $ca==$caSeleccionada?'selected="selected"':'' ?>>
		  	<?= $ca ?> 
		   </option>		
		
		<?php endforeach;?>
	</select>
	
	<br>
	
	provincias
	<select id="idProvincias">
	<?php foreach($bd[$caSeleccionada] as $provincia):?>
		<option>
			<?= $provincia?>
		</option>
	<?php endforeach;?>	
	</select>
	<br>
	<h3>Escoge una comunidad autónoma</h3>
	Observa el cambio de provincias vía AJAX
</body>