<?php 
session_start();
if (!isset($_SESSION['nombre'])) {
    header('Location:errorLogin.php');
}
?>

<header>
	(<?= $_SESSION['nombre'] ?>)
	<a href="cerrar.php">CERRAR SESIÓN</a>
</header>
<body>
<h1>
Primera pantalla
</h1>
<a href="dos.php">DOS</a>
</body>