<script type="text/javascript">

	function pintarAficionesSelected(arrayAficiones){

		//console.table(arrayAficiones);

		var todasAficiones = document.miForm["aficiones[]"];

		//console.table(todasAficiones);
		for(var aficionTodo of todasAficiones){
			aficionTodo.checked=false;
		}

		for(var aficionTodo of todasAficiones){
			for(var aficion of arrayAficiones){
				if(aficionTodo.value == aficion){
					aficionTodo.checked=true;
					//console.log("estoy dentro: " + aficionTodo.value);
				}
			}
		}
	}

    function llamarAjax(){
    	var x = new XMLHttpRequest();
    	var valor = document.getElementById('dni').value;

    	x.open("POST",
    			"ajax.php",
    			true);
    	x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    	x.setRequestHeader("X-Requested-With","XMLHttpRequest");
    	x.send("dni="+valor);
    	
    	x.onreadystatechange=function(){
    		if(x.readyState == 4 && x.status==200){
    		
    			var arrayResultadoAjax = JSON.parse(x.responseText);
    			
    			document.getElementById("nombre").value =  arrayResultadoAjax['name'];
    			document.getElementById("apellido").value = arrayResultadoAjax['firstname'];
    			pintarAficionesSelected(arrayResultadoAjax['aficiones']);
    		}
    	}
    }

</script>

<h1>MODIFICAR</h1>
<form name="miForm">
DNI<input type="text" name="dni" id="dni" value="" onchange="llamarAjax();"/></br>
NOMBRE<input type="text" id="nombre" value="" readonly="readonly"/></br>
APELLIDO<input type="text" id="apellido" value="" readonly="readonly"/></br>

<input type="checkbox" name="aficiones[]" id="escalar" value="escalar" /> Escalar
<input type="checkbox" name="aficiones[]" id="correr" value="correr" /> Correr
<input type="checkbox" name="aficiones[]" id="bailar" value="bailar" /> Bailar
<input type="checkbox" name="aficiones[]" id="cantar" value="cantar" /> Cantar
<input type="checkbox" name="aficiones[]" id="dormir" value="dormir" /> Dormir
</form>
