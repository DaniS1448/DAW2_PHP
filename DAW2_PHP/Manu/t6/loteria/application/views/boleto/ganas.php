<h1>Has ganado!! 500.000€</h1>

<?php if($ganador=="soloWin"):?>

<?php else:?>

    <?php foreach($ganador as $g):?>    
        <?php if( !next( $ganador ) ) :?>
            Te corresponde: <?=$g->cantidadp1 * 500000 /20?>€            
        <?php endif;?>
    <?php endforeach;?>
<br>
<br>    
    <?php foreach($ganador as $g):?>
        Has compartido el boleto con <?=$g->persona2->nombre?> y le corresponde <?=$g->cantidadp2*500000/20 ?>€
        <br>
    <?php endforeach;?>
<?php endif;?>
<a href="<?= base_url()?>persona/r"><button>Volver</button></a>