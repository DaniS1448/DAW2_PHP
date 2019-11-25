<?php
require_once 'rb.php';
R::setup('mysql:host=localhost;dbname=test', 'root', '');
R::setAutoResolve( TRUE );

$idPaisNace = isset($_GET['id']) ? $_GET['id'] : null;

$pais = R::load('pais',$idPaisNace);

$personas = $pais-> alias( 'nace' ) ->ownPersonaList;
?>

<h4>Personas nacidas en <?= $pais->nombre ?></h4>

<table>
<?php foreach ($personas as $persona):?>
<tr>
	<td><?=$persona['nombre'] ?></td>
</tr>
<?php endforeach;?>

</table>
