<html>
<head>
	<title>Formulario completo</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Formulario con múltiples campos</h1>	
	<b>CAMPOS DE TEXTO:</b><br/>
	<form name="f1" method="get" action="mostrar.php"><br/> 
		Nombre: <input type="text" name="txtNombre" value="Pepe"/><br/>
		Contraseña: <input type="password" name="pswClave"><br/>
		<input type="hidden" name="hdnOculto" value=""/> <br/>
	<hr/>
	<b>RADIO:</b> <br/>
	&nbsp;&nbsp; Rojo <input type="radio" value="Rojo" name="rdSemaforo"/> <br/>
	&nbsp;&nbsp; Naranja <input type="radio" value="Naranja" name="rdSemaforo" checked="checked"/> <br/>
	&nbsp;&nbsp; Verde <input type="radio" value="Verde" name="rdSemaforo"/>
	<br/>
	<hr/>
	<b>CHECKBOX:</b> <br/> &nbsp;&nbsp; 
	Quiero recibir publicidad <input type="checkbox" name="cbPublicidad" value="Publicidad"/> <br/>
	MULTI CHECKBOX: <br/>
	<!-- Se declara el nombre terminado en [] para tratarlo en PHP como un array -->
	&nbsp;&nbsp;
	<label for="ingles">
	Inglés</label> <input type="checkbox" name="cbIdioma[]" id="ingles" value="English" />&nbsp;&nbsp; 
	Francés <input type="checkbox" name="cbIdioma[]" checked="checked" value="Français"/>&nbsp;&nbsp; 
	Alemán <input type="checkbox" name="cbIdioma[]" value="Deutch"/>
	<hr/>
	<b>SELECT: </b> <br/>
	<b>Simple:</b> <br/>
	Año de finalización de estudios:
	<select name="selAnioFinEstudios">
		<option value="2010">2010</option>
		<option value="2011" selected="selected">2011</option>
		<option value="2012">2012</option>
	</select> <br/>
		<b>Múltiple:</b> <br/>
		Ciudades:<!-- Se declara el nombre terminado en [] para tratarlo en PHP como un array -->
	<select name="selCodigosPostales[]" multiple="multiple" size="2">   
		<option value="17">Gerona</option>     
		<option value="28" selected="selected">Madrid</option>   
		<option value="50" selected="selected">Zaragoza</option> 
		</select> <br/>
	<hr/>
	<b>TEXTAREA:</b> <br/>
	Comentarios
	<textarea name="txaComentarios" cols="50" rows="5">Escribe aquí tu texto </textarea>
	<hr/>
	<b>ARCHIVO:</b> <br/>
	<input type="file" name="flArchivo"/>
	<hr/>
	<b>BOTONES:</b> <br/>
	<input type="button" value="Mostrar un mensaje" onclick="alert('Un botón genérico');"/>
	<input type="submit" name="botonEnviar" value="Enviar formulario al servidor" />
	<input type="image"	src="flechaverde.png" name="imagen" width="30" height="30" title="Equivalente a submit"/>
	<input type="reset" value="Resetear el formulario"/>
	</form>
</body>
</html>
