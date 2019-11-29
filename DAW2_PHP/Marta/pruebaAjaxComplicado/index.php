<script>
function cargar(){

	var op=document.getElementById("id-opciones").value;	

	
	var saludar=new XMLHttpRequest();
	saludar.open("GET", "ajax.php?nombre="+op, true);
	saludar.send();
	
	saludar.onreadystatechange= function (){
			if(saludar.readyState==4 && saludar.status==200){
				var codigoHtml='<table><tr><th>Aficiones Diego</th></tr>';
				var arrayAficiones=saludar.responseText.split('-');
				for(aficion of arrayAficiones){
						codigoHtml+="<tr><td>"+aficion+"</td></tr>";
					}
				codigoHtml+="</table>";
				
				document.getElementById("id-div").innerHTML=codigoHtml;
				}
		}
}

</script>



<button onclick="cargar();" >Cargar</button>
<select id="id-opciones" onchange="cargar();">
	<option value="di">Diego</option>    <!-- si no ponemos value coge Diego -->
	<option value="ma">Marta</option>
	<option value="da">Dani</option>
</select>

<div id="id-div">HOLA</div>