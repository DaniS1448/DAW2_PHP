<?php session_start();
// si no esta creada la sesion, la crea
isset($_SESSION['empleados'])?:$_SESSION['empleados']=['Pepe'=>[],'Ana'=>[],'Juan'=>[]];
?>
<h3>GESTION DE TAREAS</h3>

<a href="anadirTareas.php"><button>Añadir tareas</button></a><br/>
<a href="verTareas.php"><button>Ver tareas</button></a>


isset()? ___ true__	: ___false___	;
