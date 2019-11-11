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
            document.getElementById("puntostotal").innerHTML=$puntosScript;
        	document.getElementById("vidashoy").innerHTML=$vidasScript;
        </script>
HTML;
}
?>


<?php $totalJugador=0;$totalBanca=0; foreach ($_SESSION['yo'] as $carta){$totalJugador += $carta->valor;} foreach ($_SESSION['banca'] as $carta){$totalBanca += $carta->valor;}?>


        

	<?php if(recoger($_SESSION['usuario'], 'vidas')>0):?>
	
	<?php $_SESSION['quedanVidas'] = true;?>
	
	<!-- PARTE DE LOS BOTONES PARA JUGAR -->
        <?php if ($totalJugador <= 7.4):?>
        
        	<?php if ($totalBanca==0):?>
        		<a href="inicializar.php"><button class="boton" disabled>Nuevo juego</button></a>
                <a href="sacarCarta.php"><button class="boton">Sacar carta</button></a>
                
                <?php if (isset($_SESSION['yo']) && $_SESSION['yo'] != []): ?>
                	<a href="plantarse.php"><button class="boton">Plantarse</button></a>
                <?php else:?>
                	<a href="plantarse.php"><button class="boton" disabled>Plantarse</button></a>
                <?php endif; ?>
                
                
        	<?php elseif (($totalJugador<$totalBanca && $totalBanca<=7.5) || $totalJugador==$totalBanca): ?>
        		<a href="inicializar.php"><button class="boton">Nuevo juego</button></a>
        		<a href="sacarCarta.php"><button class="boton" disabled>Sacar carta</button></a>
        		<a href="plantarse.php"><button class="boton" disabled>Plantarse</button></a>
        		<!--<h2>HAS PERDIDO</h2>-->
        	<?php elseif ($totalJugador<$totalBanca && $totalBanca>7.5): ?>
        		<a href="inicializar.php"><button class="boton">Nuevo juego</button></a>
        		<a href="sacarCarta.php"><button class="boton" disabled>Sacar carta</button></a>
        		<a href="plantarse.php"><button class="boton" disabled>Plantarse</button></a>
        		<!--<h2>HAS GANADO</h2>-->
        	<?php endif; ?>
        
            
        
        <?php elseif ($totalJugador==7.5): ?>
        	<a href="inicializar.php"><button class="boton">Nuevo juego</button></a>
        	<a href="sacarCarta.php"><button class="boton" disabled>Sacar carta</button></a>
        	<a href="plantarse.php"><button class="boton" disabled>Plantarse</button></a>
        	<!--<h2>HAS GANADO</h2>-->

        <?php elseif ($totalJugador > 7.5):?>
            <a href="inicializar.php"><button class="boton">Nuevo juego</button></a>
            <a href="sacarCarta.php"><button class="boton" disabled>Sacar carta</button></a>
        	<a href="plantarse.php"><button class="boton" disabled>Plantarse</button></a>
            <!--<h2>HAS PERDIDO</h2>-->
        <?php endif; ?>
        <!-- FIN PARTE DE LOS BOTONES PARA JUGAR -->
        
        <?php if (isset($_SESSION['yo']) && $_SESSION['yo'] == [] ): ?>
        <div class="jugada">no se ha jugado ninguna carta todavía</div>
        <img src="img/a1.png" class="carta"></img>
        <img src="img/a1.png" class="carta"></img>
        <img src="img/a1.png" class="carta"></img>
        <img src="img/a1.png" class="carta"></img>
        <img src="img/a1.png" class="carta"></img>
        <img src="img/a1.png" class="carta"></img>
        <?php else: ?>
        	<div class="jugada jugador">Jugada (Total: <?= $totalJugador ?>)</div>
        	<table><tr>
        	<?php foreach ($_SESSION['yo'] as $carta): ?>
        		<td>
        			<img src="<?= $carta->img?>" class="carta"></img>
        		</td>
        	<?php endforeach;?>
        	</tr></table>
        <?php endif; ?>
        
        
        <?php if (isset($_SESSION['banca']) && $_SESSION['banca'] != []): ?>
        	
        	
        	
        	<div class="jugada banca">Jugada de la banca (Total: <?= $totalBanca ?>)</div>
        	
        	<table><tr>
        	<?php foreach ($_SESSION['banca'] as $carta): ?>
        		<td>
        			<img src="<?= $carta->img?>" class="carta"></img>
        		</td>
        	<?php endforeach;?>
        	</tr></table>
        	
        <?php endif; ?>
        
    <!-- PARTE DE LOS BOTONES PARA JUGAR -->
    <?php if ($totalJugador <= 7.4):?>
        
        	<?php if ($totalBanca==0):?>

        	<?php elseif (($totalJugador<$totalBanca && $totalBanca<=7.5) || $totalJugador==$totalBanca): ?>
        		<div class="resultado Perdida">HAS PERDIDO</div>
        		<?php if (isset($_SESSION['jugada']) && $_SESSION['jugada']) {aumentarLost($_SESSION['usuario']); disminuirVidas($_SESSION['usuario']); $_SESSION['jugada']=false; scriptActualizarPuntosVidas(); /*header('Location: tablero.php')*/;}?>
        	<?php elseif ($totalJugador<$totalBanca && $totalBanca>7.5): ?>
        		<div class="resultado Victoria">HAS GANADO</div>
        		<?php if (isset($_SESSION['jugada']) && $_SESSION['jugada']) {aumentarPuntos($_SESSION['usuario']); disminuirVidas($_SESSION['usuario']); $_SESSION['jugada']=false; scriptActualizarPuntosVidas();}?>
        	<?php endif; ?>

        <?php elseif ($totalJugador==7.5): ?>
        	<div class="resultado Victoria">HAS GANADO</div>
        	<?php if (isset($_SESSION['jugada']) && $_SESSION['jugada']) {aumentarPuntos($_SESSION['usuario']); /*disminuirVidas($_SESSION['usuario']);*/ $_SESSION['jugada']=false; scriptActualizarPuntosVidas(); aumentarPerfect($_SESSION['usuario']);}?>
        <?php elseif ($totalJugador > 7.5):?>
            <div class="resultado Perdida">HAS PERDIDO</div>
        	<?php if (isset($_SESSION['jugada']) && $_SESSION['jugada']) {aumentarLost($_SESSION['usuario']); disminuirVidas($_SESSION['usuario']); $_SESSION['jugada']=false; scriptActualizarPuntosVidas();}?>
        <?php endif; ?>
        <!-- FIN PARTE DE LOS BOTONES PARA JUGAR -->
        
        
	
	<?php else: ?>
	<?php $_SESSION['quedanVidas'] = false;?>
		<div class="resultadoSinVidas Perdida">¡¡NO TE QUEDAN <br>VIDAS POR HOY!!
		<br>
		<span class="Victoria">VUELVE MAÑANA</span></div>
	<?php endif;?>
<?php else:?>
	<?php header('Location:login.php');?>
<?php endif;?>