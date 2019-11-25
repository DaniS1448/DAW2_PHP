<?php session_start();?>
<h3>Lista de tareas</h3>
<?php 

echo "<ul>";
foreach ($_SESSION['empleados'] as $nombre=>$tareas) {
    echo "<li><b>$nombre</b></li>";
    echo "<ul>";
    foreach($_SESSION['empleados'][$nombre] as $tarea) {
        echo "<li>$tarea</li>";
    }
  echo "</ul>";
}

echo "</ul>";
?>

<a href="menu.php"><button>Volver a menú</button></a>