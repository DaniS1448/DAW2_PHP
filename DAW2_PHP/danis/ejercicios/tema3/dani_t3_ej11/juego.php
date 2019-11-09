<?php //require_once 'Carta.php';?>
<?php //require_once 'util.php';?>
<?php //session_start();?>

<?php if (isset($_SESSION['activo']) && $_SESSION['activo'] == true) :?>


<?php 
function scriptActualizarPuntosVidas(){
    
    $puntosScript = recoger($_SESSION['usuario'], 'points');
    $vidasScript = recoger($_SESSION['usuario'], 'vidas');
    
    echo <<<HTML
        <script>
            document.getElementById("puntostotal").value=$puntosScript;
        	document.getElementById("vidashoy").value=$vidasScript;
        </script>
HTML;
}
?>


<?php $totalJugador=0;$totalBanca=0;?>
<?php foreach ($_SESSION['yo'] as $carta): ?>
	<?php $totalJugador += $carta->valor ?>
<?php endforeach;?>
	<?php if(recoger($_SESSION['usuario'], 'vidas')>0):?>
        
        <?php if (isset($_SESSION['yo']) && $_SESSION['yo'] == [] ): ?>
        (no se ha jugado ninguna carta todavía)
        <?php else: ?>
        	<h3>Jugada (Total: <?= $totalJugador ?>)</h3>
        	<table><tr>
        	<?php foreach ($_SESSION['yo'] as $carta): ?>
        		<td>
        			<img src="<?= $carta->img?>" width="90px" height="135px"></img>
        		</td>
        	<?php endforeach;?>
        	</tr></table>
        <?php endif; ?>
        
        
        <?php if (isset($_SESSION['banca']) && $_SESSION['banca'] != []): ?>
        	
        	<?php
        	//$totalBanca=0;
                foreach ($_SESSION['banca'] as $carta){
                    $totalBanca += $carta->valor;
                }
            ?>
        	
        	<h3>Jugada de la banca (Total: <?= $totalBanca ?>)</h3>
        	
        	<table><tr>
        	<?php foreach ($_SESSION['banca'] as $carta): ?>
        		<td>
        			<img src="<?= $carta->img?>" width="90px" height="135px"></img>
        		</td>
        	<?php endforeach;?>
        	</tr></table>
        	
        <?php endif; ?>
        
        
        <?php if ($totalJugador <= 7.4):?>
        
        	<?php if ($totalBanca==0):?>
        		<br/>
                <a href="sacarCarta.php"><button>Sacar carta</button></a>
                
                <?php if (isset($_SESSION['yo']) && $_SESSION['yo'] != []): ?>
                	<a href="plantarse.php"><button>Plantarse</button></a>
                <?php endif; ?>
                
                
        	<?php elseif (($totalJugador<$totalBanca && $totalBanca<=7.5) || $totalJugador==$totalBanca): ?>
        		<h2>HAS PERDIDO</h2>
        		<a href="inicializar.php"><button>Nuevo juego</button></a>
        		<?php if (isset($_SESSION['jugada']) && $_SESSION['jugada']) {disminuirVidas($_SESSION['usuario']); $_SESSION['jugada']=false; scriptActualizarPuntosVidas(); /*header('Location: tablero.php')*/;}?>
        	<?php elseif ($totalJugador<$totalBanca && $totalBanca>7.5): ?>
        		<h2>HAS GANADO</h2>
        		<a href="inicializar.php"><button>Nuevo juego</button></a>
        		<?php if (isset($_SESSION['jugada']) && $_SESSION['jugada']) {aumentarPuntos($_SESSION['usuario']); disminuirVidas($_SESSION['usuario']); $_SESSION['jugada']=false; scriptActualizarPuntosVidas();}?>
        	<?php endif; ?>
        
            
        
        <?php elseif ($totalJugador==7.5): ?>
        
        	<h2>HAS GANADO</h2>
        	<a href="inicializar.php"><button>Nuevo juego</button></a>
        	<?php if (isset($_SESSION['jugada']) && $_SESSION['jugada']) {aumentarPuntos($_SESSION['usuario']); disminuirVidas($_SESSION['usuario']); $_SESSION['jugada']=false; scriptActualizarPuntosVidas();}?>
        
        <?php elseif ($totalJugador > 7.5):?>
        
        	<h2>HAS PERDIDO</h2>
        	<?php if (isset($_SESSION['jugada']) && $_SESSION['jugada']) {disminuirVidas($_SESSION['usuario']); $_SESSION['jugada']=false; scriptActualizarPuntosVidas();}?>
            <br/>
            <a href="inicializar.php"><button>Nuevo juego</button></a>
        
        <?php endif; ?>
	
	<?php else: ?>
		¡¡NO TE QUEDAN VIDAS POR HOY!!
	<?php endif;?>
<?php else:?>
	<?php header('Location:login.php');?>
<?php endif;?>