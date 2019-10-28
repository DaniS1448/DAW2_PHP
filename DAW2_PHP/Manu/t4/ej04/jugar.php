<head>
<title>Ejercicio 04 AJAX</title>
<script type="text/javascript">
	var arrayDatos;
	var numRand=Math.floor(Math.random()*(10+1 - 1)+1); //consigo un numero random del 1-10

    function refrescar() {        //llamada a ajax cada vez que selecciono otro idioma
    	x = new XMLHttpRequest();
    	var radioCheck = document.querySelector('input[name="lang"]:checked').value;
    	x.open("GET","ajax.php?lang="+radioCheck,true);
    	x.send();
    	x.onreadystatechange = function() {
    		if (x.readyState==4 && x.status==200) {
        		
    			var cadenaArray=x.responseText; 										//
    			arrayDatos=cadenaArray.split("|");     									//  Devuelve los datos en el idioma que selecciono
    			 																		//  
    			document.getElementById("introduceNum").innerHTML=arrayDatos[3];        //  Se los pongo a los campos que estan siempre
    			document.getElementById("btnJugar").value=arrayDatos[4];                //	( texto introducir numero,boton jugar, boton volver)
    			document.getElementById("btnVolver").value=arrayDatos[10];				//
    			
    			var num=document.getElementById("num").value;     // Consigo el valor del input de introducir numero 

				if(num!=""){	//si es diferente de vacio es que ha introducido ya un numero y puedo cambiar los textos que estaran generados
								//no entrara en el if si no se ha introducido algun numero en el input				 
    			
        			document.getElementById("miNumTxt").innerHTML=arrayDatos[5]+" "+num+"<br>";         //cambio de idioma el texto 'mi numero'
    		        document.getElementById("randNumTxt").innerHTML=arrayDatos[6]+" "+numRand+"<br>";  //cambio de idioma el texto 'tu numero'
    		        
    		        if (num>numRand){    //cambio de idioma el texto 'resultado'    		        
    		        	document.getElementById("res").innerHTML=arrayDatos[7]+"<br>";        	
    		        }else if (num<numRand){
    		        	document.getElementById("res").innerHTML=arrayDatos[8]+"<br>";        	
    		        }else{
    		        	document.getElementById("res").innerHTML=arrayDatos[9]+"<br>";
    		        }		        	
		    	}
    		}
    	}
    }	

    function jugar(){   //funcion ajax que se llamara cada vez que se le de al boton jugar
    	x = new XMLHttpRequest();
    	var radioCheck = document.querySelector('input[name="lang"]:checked').value;
    	x.open("GET","ajax.php?lang="+radioCheck,true);
    	x.send();
    	x.onreadystatechange = function() {
    		if (x.readyState==4 && x.status==200) {
        		
    			var cadenaArray=x.responseText;         // Consigo los datos en el idioma que tengo seleccionado
    			 arrayDatos=cadenaArray.split("|");     //
    			 
    			 numRand=Math.floor(Math.random()*(10+1 - 1)+1);   //Consigo un numero random del 1-10
    			 var num=document.getElementById("num").value;     //Consigo el valor del input de introducir un numero
 
    		     document.getElementById("miNumTxt").innerHTML=arrayDatos[5]+" "+num+"<br>";          //Escribo en pantalla 'mi numero': num
    		     document.getElementById("randNumTxt").innerHTML=arrayDatos[6]+" "+numRand+"<br>";	  //Escribo en pantalla 'tu numero': numRand

     		     if (num>numRand){   //Escribo en pantalla el resultado
    		      	document.getElementById("res").innerHTML=arrayDatos[7]+"<br>";        	
    		     }else if (num<numRand){
    		        document.getElementById("res").innerHTML=arrayDatos[8]+"<br>";        	
    		     }else{
    		       	document.getElementById("res").innerHTML=arrayDatos[9]+"<br>";    		        	
    		    }
    		}
    	}        
    }

</script>
</head>
<body>
<img src="img/es.png" width="30px" height="20px">
<input type="radio" name="lang" value="ES" onchange="refrescar()" checked="checked"/>

<img src="img/gb.png" width="30px" height="20px">
<input type="radio" name="lang" value="EN" onchange="refrescar()"/>

<hr>

<span id="introduceNum">Introduce un numero (1-10)</span><input type="text" id="num"/>
<br>
<input type="button" value="Jugar" id="btnJugar" onclick="jugar();"/>
<br>
<span id="miNumTxt"> </span>
<span id="randNumTxt"> </span>
<span id="res"> </span>

<a href="index.php"><input type="button" value="Volver" id="btnVolver"/></a>
</body>
