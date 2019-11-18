<head>
<title>CRUD</title>
</head>
<body>
<h2>CRUD de empleados</h2>
<fieldset>
<legend>Datos de usuario</legend>
Número de empleado <input type="text" id="numemp" onkeyup="existe();"/><span id="txtNumEmp"></span>
<br>
Nombre <input type="text" id="nombre" />
<br>
Apellido <input type="text" id="apellido"/>
<br>
Telefono <input type="text" id="telefono" maxlength="9"/>
<br>
Sexo 
<select id="sexo">
	 <!-- <option disabled selected value="n"> -- Seleccione una opcion -- </option> -->
	<option value="H">Hombre</option>
	<option value="M">Mujer</option>
</select>
<br>
<input type="button" value="Crear" id="btnCrear" onclick="crear();"/>
<input type="button" value="Consultar" id="btnConsultar" onclick="consultar();"/>
<input type="button" value="Actualizar" id="btnActualizar" onclick="actualizar();"/>
<input type="button" value="Borrar" id="btnBorrar" onclick="borrar();"/>
</fieldset>

<script type="text/javascript">
document.getElementById('btnCrear').disabled=true;
document.getElementById('btnConsultar').disabled=true;
document.getElementById('btnActualizar').disabled=true;
document.getElementById('btnBorrar').disabled=true;

function existe() {

	document.getElementById('nombre').value="";
	document.getElementById('apellido').value="";
	document.getElementById('telefono').value="";
	document.getElementById('sexo').value="n";	
	
	x = new XMLHttpRequest();
	var numemp = document.getElementById('numemp').value;
	x.open("GET","ajaxExiste.php?numemp="+numemp,true);
	x.send();
	x.onreadystatechange = function() {
		if (x.readyState==4 && x.status==200) {
			if (x.responseText == true){
				document.getElementById('txtNumEmp').innerHTML="Existe el empleado";

				//Deshabilito el boton crear
				document.getElementById('btnCrear').disabled=true;	

				//Habilito los botones de consulta, actualizar y borrar
				document.getElementById('btnConsultar').disabled=false;
				document.getElementById('btnActualizar').disabled=false;
				document.getElementById('btnBorrar').disabled=false;		
			} else{				
				document.getElementById('txtNumEmp').innerHTML="No existe el empleado, se puede crear";

				//Habilito el boton Crear
				document.getElementById('btnCrear').disabled=false;

				//Deshabilito los boton de Consulta, Actualizar y Borrar
				document.getElementById('btnConsultar').disabled=true;
				document.getElementById('btnActualizar').disabled=true;
				document.getElementById('btnBorrar').disabled=true;

				//Dejo escribir en los inputs
				document.getElementById('nombre').readOnly=false;
				document.getElementById('apellido').readOnly=false;
				document.getElementById('telefono').readOnly=false;
			}
		}
	}
}


function consultar(){
	x = new XMLHttpRequest();
	var numemp = document.getElementById('numemp').value;
	x.open("GET","ajaxConsultar.php?numemp="+numemp,true);
	x.send();
	x.onreadystatechange = function() {
		if (x.readyState==4 && x.status==200) {
			var arrayDatos=(x.responseText).split('/');

			document.getElementById('nombre').value=arrayDatos[0];
			document.getElementById('apellido').value=arrayDatos[1];
			document.getElementById('telefono').value=arrayDatos[2];
			document.getElementById('sexo').value=arrayDatos[3];
		}
	}
}

function actualizar(){
	x = new XMLHttpRequest();
	var numemp = document.getElementById('numemp').value;
	var nombre = document.getElementById('nombre').value;
	var apellido = document.getElementById('apellido').value;
	var telefono = document.getElementById('telefono').value;
	var sexo = document.getElementById('sexo').value;
	
	x.open("POST","ajaxActualizar.php",true);
	x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	x.send("numemp="+numemp+"&nombre="+nombre+"&apellido="+apellido+"&telefono="+telefono+"&sexo="+sexo);
	x.onreadystatechange = function() {
		if (x.readyState==4 && x.status==200) {
			document.getElementById("txtNumEmp").innerHTML=x.responseText;

		}
	}
}

function borrar(){
	x = new XMLHttpRequest();
	var numemp = document.getElementById('numemp').value;
	
	x.open("POST","ajaxBorrar.php",true);
	x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	x.send("numemp="+numemp);
	x.onreadystatechange = function() {
		if (x.readyState==4 && x.status==200) {
			document.getElementById("txtNumEmp").innerHTML=x.responseText;
			existe();
		}
	}
}

function crear(){
	x = new XMLHttpRequest();
	
	var numemp = document.getElementById('numemp').value;
	var nombre = document.getElementById('nombre').value;
	var apellido = document.getElementById('apellido').value;
	var telefono = document.getElementById('telefono').value;
	var sexo = document.getElementById('sexo').value;
	
	x.open("POST","ajaxCrear.php",true);
	x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	x.send("numemp="+numemp+"&nombre="+nombre+"&apellido="+apellido+"&telefono="+telefono+"&sexo="+sexo);
	x.onreadystatechange = function() {
		if (x.readyState==4 && x.status==200) {
			document.getElementById("txtNumEmp").innerHTML=x.responseText;
			existe();
		}
	}
}




</script>
</body>