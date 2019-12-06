<h2>Listado de aficiones</h2>

<table border="1">
<tr><th>ID</th><th>AFICION</th></tr>
<?php foreach($misAficiones as $aficion):?>
	<tr><td><?=$aficion->id ?></td><td><?$aficion->nombre ?></td></tr>
<?php endforeach;?>
</table>