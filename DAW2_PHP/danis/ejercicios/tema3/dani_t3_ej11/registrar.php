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

    				if(x.responseText.includes('Usuario creado correctamente')){
    					setTimeout('window.location.href = "login.php"', 3000);
    				}
    			}
    		}
    	}

    	function validarDatos(){
			var user = document.getElementById("user").value;
			var password = document.getElementById("password").value;
			var name = document.getElementById("name").value;
			
			var infoUser='';
			var infoPassword='';
			var infoName='';
			var patron = /[^a-zA-ZçÇáÁíÍóÓéÉúÚ0-9 ]/;
			var patron2 = /[^a-zA-ZçÇáÁíÍóÓéÉúÚ0-9 ]/;

			var userOK = false;
			var paswwordOK = false;
			var nameOK = false;


			if (user == '') {
				infoUser+='<font color=\"red\">El campo usuario está vacío</font>';
			} else if (user.length < 3 || user.length > 25) {
				infoUser+='<font color=\"red\">El número de caracteres debe estar entre 3 y 25 caracteres</font>';
			} else if (patron.test(user)){
				infoUser+='<font color=\"red\">Los caracteres en la posicion ';
				for (var i = 0; i < user.length; i++) {
					if(patron.test(user.charAt(i))){
						infoUser+=(i+1)+" ";
					}
				}
				infoUser+=' están prohibidos</font>';
			} else {
				infoUser+='<font color=\"blue\">El usuario es válido</font>';
				userOK = true;
			}

			if (password == '') {
				infoPassword+='<font color=\"red\">El campo contraseña está vacío</font>';
			} else if (password.length < 5 || password.length > 25) {
				infoPassword+='<font color=\"red\">La contraseña debe tener entre 5 y 25 caracteres</font>';
			} else if (patron.test(password)){
				infoPassword+='<font color=\"red\">Los caracteres en la posicion ';
				for (var i = 0; i < password.length; i++) {
					if(patron.test(password.charAt(i))){
						infoPassword+=(i+1)+" ";
					}
				}
				infoPassword+=' están prohibidos</font>';
			} else {
				infoPassword+='<font color=\"blue\">La contraseña es válida</font>';
				paswwordOK = true;
			}

			if (name == '') {
				infoName+='<font color=\"red\">El campo nombre está vacío</font>';
			} else if (name.length < 3 || name.length > 50) {
				infoName+='<font color=\"red\">El nombre tener entre 5 y 50 caracteres</font>';
			} else if (patron2.test(name)){
				infoName+='<font color=\"red\">Los caracteres en la posicion ';
				for (var i = 0; i < name.length; i++) {
					if(patron.test(name.charAt(i))){
						infoName+=(i+1)+" ";
					}
				}
				infoName+=' están prohibidos</font>';
			} else {
				infoName+='<font color=\"blue\">El nombre es correcto</font>';
				nameOK = true;
			}

			if(userOK && paswwordOK && nameOK){
				registrarUsuario();
			}

			document.getElementById("validUser").innerHTML=infoUser;
			document.getElementById("validPassword").innerHTML=infoPassword;
			document.getElementById("validName").innerHTML=infoName;
		}
    
    </script>

</head>
	<table>
		<tr>
			<td>Usuario:</td>
			<td><input type="text" name="user" id="user"></td>	
			<td id="validUser"></td>		
		</tr>
		<tr>
			<td>Contraseña:</td>
			<td><input type="password" name="password" id="password"></td>
			<td id="validPassword"></td>
		</tr>
		<tr>
			<td>Nombre completo:</td>
			<td><input type="text" name="name" id="name"></td>
			<td id="validName"></td>
		</tr>
		<tr>
			<td><a href="login.php"><button>Iniciar sesión</button></a></td>
			<td><button onclick="validarDatos();">Registrar</button></td>
		</tr>
	</table>
    	
    	<div id="resultado"></div>
<body>
</body>
</html>