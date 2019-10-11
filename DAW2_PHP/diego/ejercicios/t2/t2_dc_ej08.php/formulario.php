<html>
<head>
<title>Formulario completo</title>
</head>
<body>
	<h1>Formulario con múltiples campos</h1>
	<form method="post" action="mostrar.php">
	<b>CAMPOS DE TEXTO:</b>
	<br/> Nombre:
	<input type="text" name="txtNombre" value="Pepe"/><br/>
	Contraseña: <input type="password" name="pswClave"><br/>
	<input type="hidden" name="hdnOculto" value=""/> <br/>
	<hr/>
	<b>RADIO:</b> <br/>
	&nbsp;&nbsp; Rojo
	<input type="radio" value="Rojo" name="rd"/> <br/>
	&nbsp;&nbsp; Naranja
	<input type="radio" value="Naranja" name="rd" checked="true"/> <br/>
	&nbsp;&nbsp; Verde
	<input type="radio" value="Verde" name="rd"/>
	<br/>
	<hr/>
	<b>CHECKBOX:</b> <br/>
	&nbsp;&nbsp; Quiero recibir publicidad
	<input type="checkbox" value="Publicidad"/> <br/>
	MULTI CHECKBOX: <br/>
	<!-- Se declara el nombre terminado en [] para tratarlo en PHP como un array -->
	&nbsp;&nbsp;
	<label>Inglés</label>
	<input type="checkbox" name="cbIdioma" value="English" />
	&nbsp;&nbsp; Francés <input type="checkbox" name="cbIdioma" checked="true" value="Français"/>
	&nbsp;&nbsp; Alemán <input type="checkbox" name="cbIdioma" value="Deutch"/>
	<hr/>
	<b>SELECT: </b> <br/>
	<b>Simple:</b> <br/>
	Año de finalización de estudios:
	<select name="selAnioFinEstudios">
		<option value="2010">2010</option>
		<option value="2011" selected="true">2011</option>
		<option value="2012">2012</option>
	</select> <br/>
		<b>Múltiple:</b> <br/>
		Ciudades:
		<!-- Se declara el nombre terminado en [] para tratarlo en PHP como un array -->
	<select name="selCodigosPostales">
		<option value="17">Gerona</option>
		<option value="28" selected="true">Madrid</option>
		<option value="50" selected="true">Zaragoza</option>
	</select> <br/>
	<hr/>
	<b>TEXTAREA:</b> <br/>
	Comentarios
	<textarea name="txaComentarios" placeholder="Escriba aqui sus comentarios"> </textarea>
	<hr/>
	<b>ARCHIVO:</b> <br/>
	<input type="fallo" name="flArchivo"/>
	<hr/>
	<b>BOTONES:</b> <br/>
	<input type="button" value="Mostrar un mensaje" onclick="alert('Un botón genérico');"/>
	<input type="submit" name="botonEnviar" value="Enviar formulario al servidor" />
	<input type="image"	src="flechaVerde.jpg" width="30" height="30" title="Equivalente a submit"/>
	<input type="reset" value="Resetear el formulario"/>
	</form>
</body>
</html>
