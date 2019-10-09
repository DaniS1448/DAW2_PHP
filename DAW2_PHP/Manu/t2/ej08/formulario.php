<html> 
<head>   
	<title>Formulario completo</title> 
	<meta charset="utf-8">
</head> 
<body> 
	<h1>Formulario con m&uacute;ltiples campos</h1> 
	<b>CAMPOS DE TEXTO:</b> <br /> 
	<form name="f1" action="mostrar.php" method="get"> 
		Nombre: <input type="text" name="txtNombre" value="Pepe" /> <br /> 	
		Contrase&ntilde;a: <input type="password" name="pswClave" /> <br />
		Oculto <input type="hidden" name="hdnOculto" value="" /> <br /> 
	<hr /> 
	<b>RADIO:</b> <br /> &nbsp;&nbsp; 
		Rojo <input type="radio" value="Rojo" name="rdSemaforo" /> <br /> &nbsp;&nbsp; 
		Naranja <input type="radio" value="Naranja" name="rdSemaforo" checked="checked" /> <br /> &nbsp;&nbsp; 
		Verde <input type="radio" value="Verde" name="rdSemaforo" /> <br /> 
	<hr /> 
	<b>CHECKBOX:</b> <br /> &nbsp;&nbsp; 
		Quiero recibir publicidad <input type="checkbox" name="cbPublicidad" value="Publicidad"/> <br /> 
	MULTI CHECKBOX: <br /> <!-- Se declara el nombre terminado en [] para tratarlo en PHP como un array --> &nbsp;&nbsp; 
		Ingl&eacute;s <input type="checkbox" name="cbIdioma[]" value="English" />  &nbsp;&nbsp; 
		Franc&eacute;s <input type="checkbox" name="cbIdioma[]" checked="checked" value="Français" /> &nbsp;&nbsp; 
		Alem&aacute;n <input type="checkbox" name="cbIdioma[]" value="Deutch" /> 
	<hr /> 
	<b>SELECT: </b> <br /> 
	<b>Simple:</b> <br /> 
		A&ntilde;o de finalizaci&oacute;n de estudios: 
		<select name="selAnioFinEstudios">   
		<option value="2010">2010</option>     
		<option value="2011" selected="selected">2011</option>   
		<option value="2012">2012</option> </select> <br /> 
	<b>M&uacute;ltiple:</b> <br /> 
		Ciudades: <!-- Se declara el nombre terminado en [] para tratarlo en PHP como un array --> 
		<select name="selCodigosPostales[]" multiple="multiple" size="2">   
		<option value="17">Gerona</option>     
		<option value="28" selected="selected">Madrid</option>   
		<option value="50" selected="selected">Zaragoza</option> 
		</select> 
	<br /> 
	<hr /> 
	<b>TEXTAREA:</b> <br />   
		Comentarios <textarea name="txaComentarios" cols="50" rows="5">Escriba aqu&iacute; sus comentarios </textarea> 
		<hr /> <b>ARCHIVO:</b> <br />   
		<input type="file" name="flArchivo" /> 
	<hr /> 
	<b>BOTONES:</b> <br />   
		<input type="button" value="Mostrar un mensaje" onclick="alert('Un botón genérico');" />  
		<input type="submit" name="botonEnviar" value="Enviar formulario al servidor" /> 
		<input type="image" src="flechaVerde.jpg" width="30" height="30" title="Equivalente a submit" name="imagen"/>
		<input type="reset" value="Resetear el formulario" />  
	</form>  	
</body> 
</html>





