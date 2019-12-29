<h1>Lista de aficiones</h1>

<table border="1">
<tr>
<th>ID</th>
<th>Nombre</th>
</tr>

<?php foreach ($aficiones as $aficion): ?>
		<tr>
			<td><?= $aficion->id?></td>
			<td><?= $aficion->nombre?></td>
			
			<td>
                <form action="<?=base_url()."aficion/d" ?>" method="post">
                <input type="hidden" name="id" value="<?=$aficion->id ?>"/>
    				<button type="submit">
    					<img src="https://img.icons8.com/wired/2x/trash.png" style="width:20px; height:auto">
    				</button>
    			</form>
			</td>
			
			 <td>
                <form action="<?=base_url()."aficion/u" ?>" method="post">
                <input type="hidden" name="id" value="<?=$aficion->id ?>"/>
    				<button type="submit">
    					<img src="https://www.elconsejo.org/wp-content/uploads/2018/10/pencil_icon-icons.com_69999.png" style="width:20px; height:auto">
    				</button>
    			</form>
			</td>
		</tr>
	<?php endforeach;?>
</table>
<a href="<?=base_url(); ?>"><button>Volver</button></a>
<a href="<?=base_url(); ?>aficion/c"><button>Añadir</button></a>