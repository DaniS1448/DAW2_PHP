<?php session_start();?>
<fieldset>
<legend>Datos personales: </legend>
Nombre: <?= $_SESSION['persona'][0]; ?> <br>
Apellidos: <?= $_SESSION['persona'][1]; ?> <br>
Fecha de nacimiento: <?= $_SESSION['persona'][2]; ?> <br>
Nacionalidad: <?= $_SESSION['persona'][6]; ?> 
</fieldset>
<fieldset>
<legend>Datos profesionales: </legend>
Departamento: <?= $_SESSION['persona'][7]; ?> <br>
Salario: <?= $_SESSION['persona'][8]; ?> <br>
Comentarios: <?= $_SESSION['persona'][9]; ?> 
</fieldset>
<fieldset>
<legend>Datos bancarios: </legend>
Cuenta corriente: <?= $_SESSION['persona'][10]; ?> <br>

</fieldset>
<?php session_unset();?>

<a href="paso1.php"><button>Volver al menú principal</button></a>