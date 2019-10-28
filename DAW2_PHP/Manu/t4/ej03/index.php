
<head>
<title>Ejercicio 03 AJAX</title>
<script type="text/javascript">

	function traducir(){
		var traduccionString=x.responseText;
		traduccionArray = traduccionString.split('|');
		
		document.getElementById("c1").innerHTML=traduccionArray[0];
		document.getElementById("c2").innerHTML=traduccionArray[1];
		document.getElementById("btn").value=traduccionArray[2];
	}
    function refrescar() {
    	x = new XMLHttpRequest();
    	var radioCheck = document.querySelector('input[name="lang"]:checked').value;
    	x.open("GET","ajax.php?radio="+radioCheck,true);
    	x.send();
    	x.onreadystatechange = function() {
    		if (x.readyState==4 && x.status==200) {
    				traducir();
    				
    		}
    	}
    }	

</script>
</head>
<body>
<img src="img/es.png" width="30px" height="20px">
<input type="radio" name="lang" value="ES" onchange="refrescar()"/>
<img src="img/gb.png" width="30px" height="20px">
<input type="radio" name="lang" value="EN" onchange="refrescar()" checked="checked"/>
<img src="img/fr.png" width="30px" height="20px">
<input type="radio" name="lang" value="FR" onchange="refrescar()"/>
<hr>
<span id="c1">Word</span> <input type="text"/>
<br>
<span id="c2">Translation </span><input type="text"/>
<br>
<input type="button" value="Send" id="btn"/>
</body>
