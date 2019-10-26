<?php
require_once('../ccaa.php');
$cadena = 'var ccaa={';
$i = 1;
foreach ($ccaa as $ca => $provincias) {
    $j=1;
    $cadenaProvincias = '';
    foreach ($provincias as $provincia) {
        $cadenaProvincias .= "'$provincia'".($j == sizeof($provincias) ? '' : ', ' );
        $j++;
    }
    $cadena.= "'$ca' : new Array($cadenaProvincias)".($i == sizeof($ccaa) ? '' : ', ' );
    $i++;
}
$cadena .= ' } ;';

?>

<head>
	<script type="text/javascript">
		var ccaa = JSON.parse( '<?= json_encode($ccaa) ?>' );

    	var x;
    	
    	function refrescar() {
    		var ca = document.getElementById("idComunidad").value;
    		sol = '';
    		for ( provincia of ccaa[ca]) {
    			sol += '<option value="'+provincia+'">'+provincia+'</option>';
    		}
    		document.getElementById('idProvincias').innerHTML = sol;
    	}	
            
	</script>
</head>

<body>

<h1>Comunidades autónomas</h1>


<form id="idForm">
ccaa
    <select name="comunidad" onchange="refrescar()" id="idComunidad">
    <?php foreach ($ccaa as $ca => $kk ): ?>
        <option value="<?= $ca ?>" >
            <?= $ca ?>
        </option>
    <?php endforeach;?>

    </select>

</form>
<br />

provincias
ccaa
<select id="idProvincias">
        <?php foreach ($ccaa['Andalucía'] as $provincia): ?>
            <option value="<?=$provincia?>">
                <?= $provincia ?>
            </option>
        <?php endforeach;?>


</select>

<h3>Escoge una comunidad autónoma</h3>
<p>Observa el cambio de provincias vía AJAX</p>
</body>