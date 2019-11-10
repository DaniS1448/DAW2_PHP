<?php 
require_once 'util.php';
session_start();
if (isset($_SESSION['activo']) && $_SESSION['activo'] == true) :?>

<h2>Todos los jugadores</h2>
<?= crearTopBoard(0); ?>
<br>
<a href="tablero.php"><button>Volver</button></a>

<?php else:?>
	<?php header('Location:login.php');?>
<?php endif;?>