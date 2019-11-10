<?php
require_once 'Carta.php';
require_once 'util.php';
session_start();
?>


<?php if (isset($_SESSION['activo']) && $_SESSION['activo'] == true) :?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Siete y media | DAW2</title>
  <meta name="description" content="Siete y media | DAW2">
  <meta name="author" content="DaniS1448">
  <link rel="stylesheet" type="text/css" href="css/cssprincipal.css">
</head>

<body>
	<div class="centrado">
		<div class="cajas">
    	
    		<div class="divTitulo">
    			<h2>Bienvenido <span><?= $_SESSION['name']; ?>.</span></h2>
    		</div>
    		<?php if ($_SESSION['usuario'] == 'test') {
    		    resetVidas('test');
    		}?>
    		<p>5 vidas cada día</p>
        	<br>
        	Puntos total: <input type="text" id="puntostotal" value="<?php echo recoger($_SESSION['usuario'], 'points')?>" size="1" readonly>
        	Vidas hoy: <input type="text" id="vidashoy" value="<?php echo recoger($_SESSION['usuario'], 'vidas')?>" size="1" readonly>
        	<a href="logout.php"><button>Salir</button></a>
        	<br>
        
        	<div class="juego">
        		<?php include_once 'juego.php';?>
        	</div>
    	</div>
    	
    	<div class="cajas">
    		<h2>TOP 10 Mejores jugadores</h2>
    		<?= crearTopBoard(10); ?>
    		<br>
    		<a href="verTodos.php"><button class="boton">Ver todos los jugadores</button></a>
    	</div>
	</div>

</body>
</html>

<?php else:?>
	<?php header('Location:login.php');?>
<?php endif;?>