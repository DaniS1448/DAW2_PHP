<head>
<script type="text/javascript">
	function activarComunidad(){
		var x = new XMLHttpRequest();
		x.open("GET",
				"ajax.php?comunidad="+document.getElementById("comunidad").value,
				true);
		x.setRequestHeader("X-Requested-With","XMLHttpRequest");
		//x.send("comunidad="+document.getElementById("comunidad").value);
		x.send();
		
		x.onreadystatechange=function(){
			if(x.readyState == 4 && x.status==200){
				document.getElementById("divCiudad").innerHTML=x.responseText;
			}
		}
	}

</script>

</head>
<body>
    <h1>Comunidades autónomas</h1>
    <div id="divComunidad">
    <select id="comunidad" name="comunidad" onchange="activarComunidad()">

<?php
include_once 'datos.php';

foreach ($comunidades as $k => $v){
    echo "<option>$k</option>";
}
    
echo "</select></div>";
echo <<<HTMLF
    <div id="divCiudad">
        <select id="ciudad" name="ciudad">
HTMLF;

foreach ($comunidades['Andalucía'] as $k => $v){
    echo "<option>$v</option>";
}

echo "</select></div>";

?>
</body>