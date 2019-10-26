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
Segunda pantalla
</h1>
<a href="uno.php">UNO</a>
</body>