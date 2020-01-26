<script type="text/javascript">

    function llamarAjax(){
    	var x = new XMLHttpRequest();
    	var valorDeMiSelect = document.getElementById('miSelect').value;

    	x.open("POST",
    			"ajax.php",
    			true);
    	x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    	x.setRequestHeader("X-Requested-With","XMLHttpRequest");
    	x.send("nombre="+valorDeMiSelect);
    	
    	x.onreadystatechange=function(){
    		if(x.readyState == 4 && x.status==200){
    			var elementos = x.responseText.split('&');

    			var pais = elementos[0];

    			var ciudades = elementos[1].split("-");

    			var htmlCiudades = "<table border='2'><tr><th>País<th><th>Ciudad<th></tr>";

    			for(var ciudad of ciudades){
    				htmlCiudades+="<tr><td>"+pais+"</td><td>"+ciudad+"</td></tr>";
        		}

    			htmlCiudades+="</table>";

    			//console.log(x.responseText);

    			document.getElementById("resultadoPais").innerHTML = pais;
    			document.getElementById("resultadoCiudades").innerHTML = htmlCiudades;

    		}
    	}
    }

</script>

<h1>Prueba 2</h1>

<select id="miSelect">
	<option>España</option>
	<option>Rumanía</option>
	<option>Alemania</option>
</select>
<br/>
<br/>
<button onclick="llamarAjax();">Llamar a Ajax</button>
<br>
<br>
<div id="resultadoPais"></div>
<br><br>
<div id="resultadoCiudades"></div>

<?= "<h2>TIT H2</h2>"?>

<?php 
$arrayPHP=["miDato1"=>"miValor1", "miDato2"=> ["valor21", "valor22"]];
?>

<script>
	var arrayJS = JSON.parse( '<?= json_encode($arrayPHP) ?>' );
	console.log(arrayJS);
</script>