<?php session_start();?>
<form action="paso2POST.php" method="post">
<fieldset>
<legend>Datos profesionales: </legend>

Departamento: 
<select name="departamento">
  <option value="Marketing">Marketing</option>
  <option value="RRHH">RRHH</option>
  <option value="Direccion">Direccion</option>
  <option value="Ventas">Ventas</option>
</select>
<br>

Salario: <input type="text" name="salario" size="30"><br>

Comentarios: 
<input type="textarea" name="comentarios"><br>


<input type="submit" value="Grabar informacion e ir al paso 3 - Datos bancarios">
</fieldset>
</form>