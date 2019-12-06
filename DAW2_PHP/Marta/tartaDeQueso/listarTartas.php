<h2>Todas nuestras tartas</h2>

<?php 
require_once 'rb.php';
R::setup('mysql:host=localhost; dbname=tartas', 'root','');
$nuestrasTartas=R::findAll('tarta');
?>

<table border="1">
<tr><th>Nombre</th><th>Peso</th><th>Eliminar</th><th>Modificar</th></tr>
<?php foreach ($nuestrasTartas as $tarta):?>
<tr>
<td><?= $tarta->nombre?></td>
<td><?= $tarta->peso?></td>
<td><a href="deleteTarta.php?id=<?= $tarta->id?>" ><button>Eliminar</button></a></td>
<td><a href="modifyTarta.php?id=<?= $tarta->id?>" ><button>Modificar</button></a></td>
</tr>
<?php endforeach;?>
</table>