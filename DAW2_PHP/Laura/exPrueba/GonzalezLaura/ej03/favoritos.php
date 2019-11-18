<head>
<script>

function CambiarCancion(){
	var x= new XMLHttpRequest();	
	x.open("GET","cancionAjax.php",true);
	x.send();
	x.onreadystatechange=function(){
		if(x.readyState==4&&x.status==200){
			document.getElementById("cancion").value=x.responseText;
			}
				}
}
function CambiarPelis(){
	var x= new XMLHttpRequest();
		
	x.open("GET","pelisAjax.php",true);
	x.send();
	x.onreadystatechange=function(){
		if(x.readyState==4&&x.status==200){
			document.getElementById("peli").value=x.responseText;
			}
				}
}
</script>
</head>
<body>
<button onclick="CambiarPelis()" >Peli favorita</button>
<input type="text" id="peli" readonly="readonly" value="star wars" /><br/>
 <button onclick="CambiarCancion()" >Cancion favorita</button>
<input type="text" readonly="readonly" id="cancion" value="mediterraneo"/><br/><br/>
</body>
 