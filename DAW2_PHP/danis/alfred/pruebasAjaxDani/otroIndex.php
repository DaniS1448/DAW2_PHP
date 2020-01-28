<script>

function cambiar(){
    	var x = new XMLHttpRequest();

    	x.open("GET",
    			"http://worldclockapi.com/api/json/est/now",
    			true);
    	x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    	x.setRequestHeader("X-Requested-With","XMLHttpRequest");
    	x.send();
    	
    	x.onreadystatechange=function(){
    		if(x.readyState == 4 && x.status==200){
    			var arrayResultadoAjax = JSON.parse(x.responseText);
    			console.table(arrayResultadoAjax);
    			
    			document.getElementById("dia").innerHTML = arrayResultadoAjax['dayOfTheWeek'];
    			document.getElementById("diames").innerHTML = arrayResultadoAjax['ordinalDate'];
    		}
    	}
    }

</script>
<h1>Prueba ajax</h1>

<input type="button" onclick="cambiar();" value="Llamada AJAX"/>
<div id="dia"></div>
<div id="diames"></div>
