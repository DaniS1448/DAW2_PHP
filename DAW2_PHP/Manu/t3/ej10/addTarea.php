<h1>Añadir tareas</h1>
<form action="addTareaPost.php" method="post">
Nombre de la tarea<input type="text" name="tarea"/><br>
Empleado
<select name="empleado">
<?php 
    session_start();
    foreach($_SESSION as $empleado=>$e){
        echo "<option value=\"$empleado\">$empleado</option>";
    }    
?>
</select><br>
<input type="submit" value="Asignar"/>
</form>