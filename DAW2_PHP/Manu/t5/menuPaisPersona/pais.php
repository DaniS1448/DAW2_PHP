<h1>Lista de paises</h1>

<a href="paisAdd.php"><button>Nuevo</button></a>
<a href="index.php"><button>Volver</button></a>

<table border=1>
<tr>
<th colspan="3">Paises</th>
</tr>
<?php
require_once 'rb.php';

R::setup('mysql:host=localhost;dbname=test','root','');

$pais=R::findAll('pais');

foreach($pais as $p):
?>
<tr>	
<td>

<?= $p->nombre;?>
</td>
<td>
<a href="paisListar.php?id=<?= $p->id;?>"><button><img src="https://image.flaticon.com/icons/png/128/61/61088.png" style="width:20px; height:auto"></button></a>
</td>
<td>
<a href="paisEliminar.php?id=<?= $p->id;?>"><button><img src="https://img.icons8.com/wired/2x/trash.png" style="width:20px; height:auto"></button></a>
</td>
</tr>
<?php endforeach;?>
</table>
