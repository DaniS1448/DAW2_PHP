<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Registrar | Siete y media</title>
  <meta name="description" content="Registrar | Siete y media">
  <meta name="author" content="DaniS1448">
  
  
    <script type="text/javascript">
    	function registrarUsuario(){
    		var x = new XMLHttpRequest();
    		x.open("POST",
    				"registrarPost.php",
    				true);
    		x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    		x.setRequestHeader("X-Requested-With","XMLHttpRequest");
    		//x.send("comunidad="+document.getElementById("comunidad").value);
    		x.send("user="+document.getElementById("user").value+"&password="+document.getElementById("password").value+"&name="+document.getElementById("name").value);
    		
    		x.onreadystatechange=function(){
    			if(x.readyState == 4 && x.status==200){
    				document.getElementById("resultado").innerHTML=x.responseText;
    			}
    		}
    	}
    
    </script>

</head>
	<table>
		<tr>
			<td>Usuario:</td>
			<td><input type="text" name="user" id="user"></td>			
		</tr>
		<tr>
			<td>Contraseña:</td>
			<td><input type="password" name="password" id="password"></td>
		</tr>
		<tr>
			<td>Nombre completo:</td>
			<td><input type="text" name="name" id="name"></td>
		</tr>
		<tr>
			<td><a href="login.php"><button>Iniciar sesión</button></a></td>
			<td><button onclick="registrarUsuario();">Registrar</button></td>
		</tr>
	</table>
    	
    	<div id="resultado"></div>
<body>
</body>
</html>