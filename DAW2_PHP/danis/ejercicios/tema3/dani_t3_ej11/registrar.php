<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Registrar | Siete y media</title>
  <meta name="description" content="Registrar | Siete y media">
  <meta name="author" content="DaniS1448">
  <link rel="stylesheet" type="text/css" href="css/login/styler.css" />
   <style type="text/css">
   
   h2{
    text-align: center;
    margin-top: 15px;
    color: white;
   }
    .divPrin2{
        transform: scale(2) translate(0px,0px);
        transform-origin: 50 0;
        //margin-top: 100 px;
    }
    
    h1 {
        
        text-align: center; 
    	font-weight: normal;
    	letter-spacing: -1px;
    	color: #34495E;
    }
    
    .resultado {
    	margin-top: 15px;
    	min-height: 160px;
    	border-radius: 10px;
    	width: 100%;
    	text-align: center;
    	font-size: 60px;
    	text-transform: uppercase;
    	font-weight: bold;
    	line-height: 145px;
    	color: #FFFFFF;
    	text-shadow: -5px 5px 0px #ffec64, -10px 10px 0px #ffc973, -15px 15px
		0px #ffab23;
    }
    

  </style>
  <link rel="stylesheet" type="text/css" href="css/login/resp.css2" />
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
			var patron = /[^a-zA-Z0-9]/;
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
    	<h1 class="resultado">Siete y media | REGISTRO</h1>
	<div class="divPrin">
		<div class="form-3">
            <p class="clearfix">
            	<span id="validUser"></span>
                <label for="user">Usuario</label>
                <input type="text" name="user" id="user" placeholder="Usuario">
            </p>
            <p class="clearfix">
            	<span id="validPassword"></span>
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" placeholder="Contraseña">
            </p>
            <p class="clearfix">
            	<span id="validName"></span>
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" placeholder="Nombre">
            </p>
            
            <p class="clearfix">
                <a href="login.php"><input type="button" value="Iniciar sesión"></a>
            </p>  
			<p class="clearfix">
                <button type="button" class="btnReg" onclick="validarDatos();">Registrar</button>
            </p>
            <p class="clearfix">
                <div id="resultado"></div>
            </p> 
        </div>
	</div>
<body>
</body>
</html>