<h1>Lista de personas</h1>

<table border="1">
	<tr>
		<th>Foto</th>
		<th>ID</th>
		<th>Nombre</th>
		<th>Pais Nacimiento</th>
		<th>Pais Residencia</th>
		<th>Aficiones gusta</th>
		<th>Aficiones odia</th>
		
	</tr>
	
	<?php foreach ($personas as $persona): ?>
		<tr>
			<td>
            	<img src="<?=base_url()."assets/img/".$persona->imagen ?>" width="50px" height="50px">
            </td>
			<td><?= $persona->id?></td>
			<td><?= $persona->nombre?></td>
			<td><?= $persona->pais_nacimiento->nombre?></td>
			<td><?= $persona->pais_reside->nombre?></td>
			
			<td>
                <?php 
                $gusta = $persona -> aggr ('ownAficiongustaList', 'aficion' );  
                 foreach ( $gusta as $aficion ) { 
                     echo $aficion -> nombre." "; 
                 }
                ?>
            </td>
            
            <td>
                <?php 
                $odia = $persona -> aggr ('ownAficionodiaList', 'aficion' );  
                foreach ( $odia as $aficion ) { 
                     echo $aficion -> nombre." "; 
                 }
                ?>
            </td>
            
            
            
            <td>
                <form action="<?=base_url()."persona/d" ?>" method="post">
                <input type="hidden" name="id" value="<?=$persona->id ?>"/>
    				<button type="submit">
    					<img src="https://img.icons8.com/wired/2x/trash.png" style="width:20px; height:auto">
    				</button>
    			</form>
			</td>
			
			 <td>
                <form action="<?=base_url()."persona/u" ?>" method="post">
                <input type="hidden" name="id" value="<?=$persona->id ?>"/>
    				<button type="submit">
    					<img src="https://www.elconsejo.org/wp-content/uploads/2018/10/pencil_icon-icons.com_69999.png" style="width:20px; height:auto">
    				</button>
    			</form>
			</td>

		</tr>
	<?php endforeach;?>
</table>
<a href="<?=base_url();?>"><button>Volver</button></a>
<a href="<?=base_url();?>persona/c"><button>Añadir</button></a>