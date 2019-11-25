<?php
session_start();
$nombreTarea = isset($_POST['nombreTarea']) ? $_POST['nombreTarea'] : null;
$empleado = isset($_POST['empleado']) ? $_POST['empleado'] : null;

if (!isset($_SESSION[$empleado])) {
    $_SESSION[$empleado]=[];
} 

array_push($_SESSION[$empleado],$nombreTarea);

// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';

?>

<h3>Lista de tareas de <?= $empleado?></h3>

<ul>
<?php $i=0;?>
	<?php  foreach ($_SESSION[$empleado] as $tarea):?>
	<li>
	<?php if ($i ==sizeof($_SESSION[$empleado])-1):?>
	<b><?= $tarea?> </b>(¡¡NUEVA!!)
	<?php else: ?>
		<?= $tarea?>
	<?php endif; ?>
	
	<?php $i++; ?>
	</li>
	<?php endforeach;?>

</ul>