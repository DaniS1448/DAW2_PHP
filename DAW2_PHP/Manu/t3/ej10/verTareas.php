<h3>Lista de tareas</h3>

<ul>
<?php 
session_start();
foreach($_SESSION as $empleado=>$tareas){
     echo "<li>$empleado</li>";
     echo "<ul>";
     foreach ($tareas as $tarea){
         echo "<li>$tarea</li>";
     }  
    echo "</ul>";
}   

?>

</ul>
<a href="main.php"><button>Volver</button></a>
