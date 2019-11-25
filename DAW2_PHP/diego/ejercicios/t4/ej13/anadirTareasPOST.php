<?php session_start();?>
<h4>Lista de tareas de <?= $_POST['empleado'];?></h4>
<?php
// guardo los valores del post en variables nuevas
$empleado = $_POST['empleado'];
$tarea = $_POST['tarea'];
// inserto valores en el array
array_push($_SESSION['empleados'][$empleado], $tarea);
// sacamos por pantalla una lista del array
echo "<ul>";
$cont = 1;
foreach ($_SESSION['empleados'][$empleado] as $tarea) {
// si el tamaño del array es igual al contador(cuando es la ultima insercion), lo imprime como novedad
    if (sizeof($_SESSION['empleados'][$empleado]) == $cont) {
        echo "<li><b>$tarea (¡¡NUEVO!!)</b></li>";
    } else {
        echo "<li>$tarea</li>";
    }
    $cont ++;
}
echo "</ul>";
// echo "<pre>";
// print_r($_SESSION['empleados']);
// echo "</pre>";
?>
<button>
	<a href="menu.php">Volver al menú principal</a>
</button>