<html>
<head>
<title>Formulario completo</title>
</head>
<body>
	<h1>Formulario envio ficheros</h1>
	<form name="f1" enctype="multipart/form-data" action="subirF.php" method="post">
		<b>ARCHIVO:</b> <br /> 
		<input type="fILE" name="f"/>
		<hr />
		
		 <!--<input type="file" name="adjunto" accept=".pdf,.jpg,.png" multiple>-->
<label for="ids">Carpetas</label> 
<select id="ids" name="carpeta">
	<option value="imagen">Imagenes</option>
	<option value="texto" selected="selected">Texto</option>
	</select> 
		
		<input type="submit" name="botonEnviar" value="Subir" /> 
		</form>
	
</body>
</html>

