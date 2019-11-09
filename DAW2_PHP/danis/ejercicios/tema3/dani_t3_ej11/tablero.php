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
    
    #topjugadores {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    #topjugadores td, #topjugadores th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    
    #topjugadores tr:nth-child(even){background-color: #f2f2f2;}
    
    #topjugadores tr:hover {background-color: #ddd;}
    
    #topjugadores th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #4CAF50;
      color: white;
    }
    
    
  </style>
	<link rel="stylesheet" type="text/css" href="rwd-table.css">
</head>

<body>
	<div class="cajas">
		<h2>Bienvenido <?= $_SESSION['name']; ?> a Siete y media</h2>
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
		<a href="verTodos.php"><button>Ver todos los jugadores</button></a>
	</div>

</body>
</html>

<?php else:?>
	<?php header('Location:login.php');?>
<?php endif;?>