<?php require_once 'Carta.php';?>
<?php session_start();?>
<h1>Siete y media</h1>
<a href ="sacarCarta.php"><button>Sacar carta</button></a>
<h3>Jugada</h3>

<?php
if (!isset($_SESSION['yo']) && $_SESSION['yo'] == [] ): ?>
    (no se ha jugado ninguna carta todavía)
<?php else:?>
	<?php $acc=0; ?>
	<ul>
	<?php foreach ($_SESSION['yo'] as $carta): ?>
	<li>

	<?php $acc += $carta->valor?>
	<?= $carta->nombre?> (Total: <?=$acc; ?>)
		<img alt="carta" src="<?= $carta->img;?>" width="90px" heigth="120px">
	</li>
	<?php endforeach;?>
	
	</ul>
<?php endif;?>



<br/>


<button>Plantarse</button>
<br/>
<button>Nuevo juego</button> 