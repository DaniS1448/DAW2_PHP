<h2>Hola, <?=$persona->nombre ?></h2>

<h3>Tus boletos</h3>
<a href="<?= base_url()?>boleto/add"><button>Añadir boleto</button></a>

[ 
<?php 
    $boletos = $persona -> aggr ('ownPersonaboletosList', 'boleto' );
        foreach ( $boletos as $boleto ) {
            echo $boleto -> numero." - ";
        }
?>
]        



<h3>Boletos repartidos</h3>
<a href="<?= base_url()?>boleto/repartir"><button>Repartir boleto</button></a>

<table border="1">
	<tr>
    	<th>Boleto</th>
    	<th>Persona a repartir</th>
    	<th>Cantidad repartida</th>
	</tr>
<?php 
   
    foreach ( $repartidos as $r ):?>
        
         <tr>
         	<td><?=$r->boleto-> numero ?></td>
         	<td><?=$r->persona2-> nombre?></td>
         	<td><?=$r->cantidadp2 ?></td>
         </tr>
            
<?php endforeach;?>
</table>   
<br>
<h4>Comprobar boleto</h4>
<form action="<?= base_url()?>boleto/comprobar" method="post">
Numero boleto:<input type="text" name="boleto" minlength="5" maxlength="5" required="required"/>
<br>
<input type="submit" value="Comprobar"/>
</form>

