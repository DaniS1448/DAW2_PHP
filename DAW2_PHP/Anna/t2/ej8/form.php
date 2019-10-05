<html>
<head>
<title>Formulario completo</title>
</head>
<body>
	<h1>Formulario con múltiples campos</h1>
	<form name="f1" action="mostrar.php" method="get">
	<b>CAMPOS DE TEXTO:</b>
	<br /> Nombre:
	<input type="text" name="txtNombre" value="Pepe" />
	<br />
		Contraseña: <input type="password" name="pswClave"/><br /> 
		Oculto <input type="hidden" name="hdnOculto" value="invisible" /> <br />
		<hr />
		<b>RADIO:</b> <br /> &nbsp;&nbsp; 
		Rojo <input type="radio" value="Rojo" name="rdSemaforo" /> <br /> &nbsp;&nbsp; 
		Naranja <input type="radio" value="Naranja" name="rdSemaforo" checked="checked" /> <br />&nbsp;&nbsp; 
		Verde <input type="radio" value="Verde" name="rdSemaforo" />
		<br />
		<hr />
		<b>CHECKBOX:</b> <br /> &nbsp;&nbsp; Quiero recibir publicidad 
		<input type="checkbox" value="Publicidad" name="publicidad" /> <br /> 
		<b>MULTI CHECKBOX:</b> <br /> &nbsp;&nbsp;
		<!-- Se declara el nombre terminado en [] para tratarlo en PHP como un array -->
		&nbsp;&nbsp; 
		
		<label for="English">Inglés</label> 
		<input type="checkbox" name="cbIdioma[]" value="English" id="English"/> &nbsp;&nbsp; 
		<label for="Français">Francés</label> 
		<input type="checkbox" name="cbIdioma[]" id="Francés" checked="checked" value="Français" /> &nbsp;&nbsp; 
		<label for="Alemán">Alemán</label> 
		<input type="checkbox" name="cbIdioma[]" id="Alemán" value="Deutch" />
		<hr />
		
		<b>SELECT: </b> <br /> <b>Simple:</b> <br /> 
		<label for="anio">Año de finalización de estudios: </label> 
		<select name="selAnioFinEstudios" id="anio">
			<option value="2010">2010</option>
			<option value="2011" selected="selected">2011</option>
			<option value="2012">2012</option>
		</select> <br /> 
		<b>Múltiple:</b> <br /> 
		Ciudades:
		<!-- Se declara el nombre terminado en [] para tratarlo en PHP como un array -->
		<select name="selCodigosPostales[] multiple="multiple" size="2" >
			<option value="17" >Gerona</option>
			<option value="28" >Madrid</option>
			<option value="50" selected="selected" >Zaragoza</option>
		</select> <br />
		<hr />
		<br /> Comentarios:<br />
		<textarea cols="50" rows="5" name="txaComentarios" >"Escribe aqui sus comentarios" </textarea>
		<hr />
		<b>ARCHIVO:</b> <br /> 
		<input type="fILE" name="f"/>
		<hr />
		<b>BOTONES:</b> <br /> 
		<input type="reset" value="Borrar datos" onclick="alert('Se borran todos los datos');" /> 
			<input type="submit" name="botonEnviar" value="Enviar formulario al servidor" /> 
			<input type="image" src="flechaverde.gif" width="30" height="30" title="Equivalente a submit" />
	</form>
	
</body>
</html>
