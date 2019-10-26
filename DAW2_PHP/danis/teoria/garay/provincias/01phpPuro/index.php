<?php 
require_once '../ccaa.php';
$caSeleccionada = isset($_GET['comunidad'])?$_GET['comunidad']:'Andalucía';
?>
<head>
	<script type="text/javascript">
	function refrescar() {
		document.getElementById('idForm').submit();
		}	
	</script>
</head>

<body>
<h1>Comunidades autónomas</h1>


<form id="idForm">
ccaa
    <select name="comunidad" onchange="refrescar()">
    <?php foreach ($ccaa as $ca => $provincias): ?>
        <option value="<?= $ca ?>" <?= $ca==$caSeleccionada?'selected="selected"':'' ?>>
            <?= $ca ?>
        </option>
    <?php endforeach;?>
    
    </select>

</form>
<br />


provincias
ccaa
<select>
<?php foreach ($ccaa[$caSeleccionada] as $provincia): ?>
    <option>
        <?= $provincia ?>
    </option>
<?php endforeach;?>

</select>

<h3>Escoge una comunidad autónoma</h3>
<p>Observa el cambio de provincias vía AJAX</p>
</body>