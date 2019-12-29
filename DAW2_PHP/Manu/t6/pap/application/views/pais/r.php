<h1>Lista de paises</h1>

<table border="1">
	<tr>
		<th>ID</th>
		<th>Nombre</th>
	</tr>
	
	<?php foreach ($paises as $pais): ?>
		<tr>
			<td><?= $pais->id?></td>
			<td><?= $pais->nombre?></td>
			
			<td>
                <form action="<?=base_url()."pais/d" ?>" method="post">
                <input type="hidden" name="id" value="<?=$pais->id ?>"/>
    				<button type="submit">
    					<img src="https://img.icons8.com/wired/2x/trash.png" style="width:20px; height:auto">
    				</button>
    			</form>
			</td>
			
			 <td>
                <form action="<?=base_url()."pais/u" ?>" method="post">
                <input type="hidden" name="id" value="<?=$pais->id ?>"/>
    				<button type="submit">
    					<img src="https://www.elconsejo.org/wp-content/uploads/2018/10/pencil_icon-icons.com_69999.png" style="width:20px; height:auto">
    				</button>
    			</form>
			</td>
		</tr>
	<?php endforeach;?>
</table>
<br>
<a href="/ejercicios/t6/pap/"><button>Volver</button></a>
|
<a href="/ejercicios/t6/pap/pais/c"><button>Añadir</button></a>