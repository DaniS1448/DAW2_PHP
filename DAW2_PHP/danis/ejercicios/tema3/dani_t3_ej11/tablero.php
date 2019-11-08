<?php require_once 'Carta.php';?>
<?php session_start();?>
<h1>Siete y media</h1>

<?php $acc=0;?>
<?php foreach ($_SESSION['yo'] as $carta): ?>
	<?php $acc += $carta->valor ?>
<?php endforeach;?>
<h3>Jugada (Total: <?= $acc ?>)</h3>

<?php if (isset($_SESSION['yo']) && $_SESSION['yo'] == []): ?>
(no se ha jugado ninguna carta todavía)
<?php else: ?>
	
	<table><tr>
	<?php foreach ($_SESSION['yo'] as $carta): ?>
		<td>
			<img src="<?= $carta->img?>" width="90px" height="135px"></img>
		</td>
	<?php endforeach;?>
	</tr></table>
<?php endif; ?>

<br/>
<a href="sacarCarta.php"><button>Sacar carta</button></a>
<button>Plantarse</button>
<br/>
<a href="index.php"><button>Nuevo juego</button></a>
