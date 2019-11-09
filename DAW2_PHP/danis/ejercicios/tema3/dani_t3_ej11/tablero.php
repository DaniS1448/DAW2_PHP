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
  
  <style>
    body {background-color: powderblue;}
    .juego{
        padding: 1em;
        //width: 615px;
        //height: 570px;
        //border: 3px solid black;
        margin: 1em;
    }
    
    .cajas{
        margin: 20px;
        //top: 50px;
        //position: relative;
        display: inline-block;
        //background-color: yellow;
        vertical-align: top;
    }
  </style>

</head>

<body>
	<div class="cajas">
		<h2>Bienvenido <?= $_SESSION['name']; ?> a Siete y media</h2>
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
		<a href="verTodos.php"><button>Ver todos los jugadores</button></a>
	</div>

</body>
</html>

<?php else:?>
	<?php header('Location:login.php');?>
<?php endif;?>