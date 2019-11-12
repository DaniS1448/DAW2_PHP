<?php session_start();?>
<form action="paso1POST.php" method="post">
<fieldset>
<legend>Datos personales: </legend>

Nombre: <input type="text" name="nombre" size="30">
Apellidos: <input type="text" name="apellidos" size="30"><br>
Fecha de nacimiento: <input type="text" name="fecha" size="10"><br>
Género: 
<input type="radio" name="genero" value="hombre" checked="checked"> Hombre
<input type="radio" name="genero" value="mujer"> Mujer
<input type="radio" name="genero" value="otro"> Otro
 <br>
 Casado o pareja de echo <input type="checkbox" name="pareja" value="pareja">
 Hijos <input type="checkbox" name="hijos" value="hijos"><br>

Nacionalidades: 
<select multiple name="nacionalidad">
  <option value="Espana">Española</option>
  <option value="Francia">Francesa</option>
  <option value="Italia">Italiana</option>
  <option value="Portugal">Portuguesa</option>
</select>
<br>
<input type="submit" value="Grabar informacion e ir al paso 2 - Datos profesionales">
</fieldset>
</form>
