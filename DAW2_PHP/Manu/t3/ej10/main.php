<h1>Gestión de tareas</h1>
<a href="addTarea.php"><button>Añadir tarea</button></a><br>
<a href="verTareas.php"><button>Ver tareas</button></a>
<?php 
session_start();

isset($_SESSION['Pepe'])?:$_SESSION["Pepe"]=[];
isset($_SESSION['Ana'])?:$_SESSION["Ana"]=[];
isset($_SESSION['Juan'])?:$_SESSION["Juan"]=[];

?>
