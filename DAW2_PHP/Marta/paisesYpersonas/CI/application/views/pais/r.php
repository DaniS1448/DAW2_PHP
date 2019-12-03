<h2>Lista de paises</h2>

<table border='1'>
<tr><th>ID</th><th>NOMBRE</th></tr>
<?php foreach($misPaises as $pais):?>
<tr><td><?=$pais->id ?></td><td><?=$pais->nombre?></td></tr>
<?php endforeach;?>
</table>

<br><br>
<a href="../pais"><button>Volver</button></a>