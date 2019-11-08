<?php
session_start();
if (isset($_POST['tarea'])){
$empleado=$_POST['empleado'];
$tarea=$_POST['tarea'];

array_push($_SESSION[$empleado],$tarea);

echo "<h3>Lista de tareas de $empleado</h3>";
echo "<ul>";
$i=0;
foreach ($_SESSION[$empleado] as $t){
    
    if ($i==(sizeof($_SESSION[$empleado])-1)){
        
        echo "<li><b>$t</b>(NUEVO)</li>";
        
    }else{
       
        echo "<li>$t</li>";
    }
    $i++;
    
}
echo "</ul>";
}else{
    echo "<h1>Tienes que escribir una tarea</h1>";
}
?>
<a href="main.php"><button>Volver</button></a>