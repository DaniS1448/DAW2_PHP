<h1>Lista de personas</h1>

<a href="personaAdd.php"><button>Nueva persona</button></a>
<a href="index.php"><button>Volver</button></a>

<table border=1>
<tr>
<th>Personas</th>
<th>Pais Nacimiento</th>
<th>Pais Reside</th>
<th>Aficiones Gusta</th>
<th>Aficiones Odia</th>
</tr>
<?php
require_once 'rb.php';

R::setup('mysql:host=localhost;dbname=test','root','');
R::setAutoResolve(true);

$persona=R::findAll('persona');

foreach($persona as $p):
?>
<tr>	
<td>


<?= $p->nombre;?>
</td>
<td>
<?= $p->pais==null?"---":$p->pais->nombre;?>
</td>
<td>
<?= $p->reside==null?"---":$p->reside->nombre;?>
</td>
<td>
<?php 
$gusta = $p -> aggr ('ownAficiongustaList', 'aficion' );  
 foreach ( $gusta as $aficion ) { 
     echo $aficion -> nombre." "; 
 }
?>
</td>
<td>
<?php 
$odia = $p -> aggr ('ownAficionodiaList', 'aficion' );  
 foreach ( $odia as $aficion ) { 
     echo $aficion -> nombre." "; 
 }
?>
</td>
<td>
<a href="personaEliminar.php?id=<?= $p->id;?>"><button><img src="https://img.icons8.com/wired/2x/trash.png" style="width:20px; height:auto"></button></a>
</td>
</tr>
<?php endforeach;?>
</table>
