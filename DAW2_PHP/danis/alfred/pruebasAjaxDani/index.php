<script>

function cambiar(){
    	var x = new XMLHttpRequest();
    	var valorDeMiSelect = document.getElementById('pais').value;

    	x.open("POST",
    			"ajax.php",
    			true);
    	x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    	x.setRequestHeader("X-Requested-With","XMLHttpRequest");
    	x.send("nombrePais="+valorDeMiSelect);
    	
    	x.onreadystatechange=function(){
    		if(x.readyState == 4 && x.status==200){
    			//var resultadoAjax = x.responseText;
    			var arrayResultadoAjax = JSON.parse(x.responseText);
    			//console.table(arrayResultadoAjax);
    			document.getElementById("idPais").innerHTML = valorDeMiSelect;
    			document.getElementById("idPoblacion").innerHTML = arrayResultadoAjax['poblacion'];

    			var listaCiudades="";
				for(var ciudad of arrayResultadoAjax['ciudades']){
					listaCiudades+=ciudad+", ";
				}
    			
    			document.getElementById("idCiudad").innerHTML=listaCiudades;

    		}
    	}
    }

</script>
<h1>Prueba ajax</h1>
<select id="pais" >
<option value="es">España</option>
<option value="ro">Rumania</option>
<option value="de">Alemania</option>
</select><br/>
<input type="button" onclick="cambiar();" value="cambiar"/>
<div id="idPais"></div>
<div id="idCiudad"></div>
<div id="idPoblacion"></div>
