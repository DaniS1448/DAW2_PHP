<head>
	<script type="text/javascript">

	//Cuando pulsas el boton de 'Peli favorita' se llama a esta funcion
	function peli(){
		var x=new XMLHttpRequest();
		x.open("GET","peliAJAX.php",true);  //Llamas al fichero peliAJAX.php
		x.send();
		x.onreadystatechange= function(){
			if (x.readyState==4 && x.status==200){
				document.getElementById("peli").value= x.responseText;  //Lo que devuelve el fichero peliAJAX.php es el nombre de una 
																		//pelicula del array y con eso se lo asignamos al input usando el 
																		//getElementById('peli(que es el id del input)' y con el .value le 
																		//asignamos el valor recibido.
			}
		}
	}
	
	function cancion(){    //Lo mismo que en la funcion peli()
		var x=new XMLHttpRequest();
		x.open("GET","cancionAJAX.php",true);
		x.send();
		x.onreadystatechange= function(){
			if (x.readyState==4 && x.status==200){
				document.getElementById("cancion").value= x.responseText;
			}
		}
	}
	
	</script>
</head>
<body>
	<button onclick="peli()">Peli favorita</button> 
	<input type="text" id="peli" value="Star Wars" readonly="readonly"/>
	<br>
	<button onclick="cancion()">Canción favorita</button>
	<input type="text" id="cancion" value="Close to the edge" readonly="readonly"/>
	
	
</body>

