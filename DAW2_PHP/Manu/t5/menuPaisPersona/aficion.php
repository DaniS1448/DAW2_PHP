<h1>Lista de aficiones</h1>

<a href="aficionAdd.php"><button>Nuevo</button></a>
<a href="index.php"><button>Volver</button></a>

<table border=1>
<tr>
<th>Aficiones</th>
</tr>
<?php
require_once 'rb.php';

R::setup('mysql:host=localhost;dbname=test','root','');

$aficiones=R::findAll('aficion');

foreach($aficiones as $a):
?>
<tr>	
<td>

<?= $a->nombre;?>
</td>
<td>
<a href="aficionEliminar.php?id=<?= $a->id;?>"><button><img src="https://img.icons8.com/wired/2x/trash.png" style="width:20px; height:auto"></button></a>
</td>
</tr>
<?php endforeach;?>
</table>
