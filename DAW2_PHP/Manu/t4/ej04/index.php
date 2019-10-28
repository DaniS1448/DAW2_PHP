<?php 
session_start(); 
$_SESSION['usuarios']=[];
$_SESSION['usuarios']+=["Manu"=>['pwd'=>"manu"]];      //USUARIOS DISPONIBLES PARA ENTRAR
$_SESSION['usuarios']+=["Diego"=>['pwd'=>"diego"]];
?>

<head>
<title>Ejercicio 04 AJAX</title>
<script type="text/javascript">

    function refrescar() {
    	x = new XMLHttpRequest();
    	var radioCheck = document.querySelector('input[name="lang"]:checked').value;
    	x.open("GET","ajax.php?lang="+radioCheck,true);
    	x.send();
    	x.onreadystatechange = function() {
    		if (x.readyState==4 && x.status==200) {        
    			var cadenaArray=x.responseText;
    			var arrayDatos=cadenaArray.split("|"); 
    			document.getElementById("c1").innerHTML=arrayDatos[0];
    			document.getElementById("c2").innerHTML=arrayDatos[1];
    			document.getElementById("btn").value=arrayDatos[2];    				
    		}
    	}
    }	

</script>
</head>
<body>
<form action="indexPost.php" method="post">
<img src="img/es.png" width="30px" height="20px">
<input type="radio" name="lang" value="ES" onchange="refrescar()" checked="checked"/>
<img src="img/gb.png" width="30px" height="20px">
<input type="radio" name="lang" value="EN" onchange="refrescar()"/>
<hr>
<span id="c1">Usuario</span> 

<input type="text" name="usuario"/>
<br>
<span id="c2">Constraseña </span>
<input type="text" name="pass"/>
<br>
<input type="submit" value="Entrar" id="btn"/>
</form>
</body>
