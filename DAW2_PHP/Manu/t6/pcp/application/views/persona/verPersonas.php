<h2>Personas</h2>

<a href="<?=base_url() ?>"><button>Volver</button></a>
<a href="<?=base_url() ?>persona/c"><button>Añadir persona</button></a>
<a href="<?=base_url() ?>persona/registrarVuelo"><button>Registrar vuelos</button></a>

<br>

<table border="1">
<tr>
	<th>ID</th>
	<th>DNI</th>
	<th>Persona</th>
	<th>Pais (nacimiento)</th>
	<th>Paises viajados</th>
</tr>
<?php foreach($personas as $persona):?>

<tr>
	<td><?=$persona->id ?></td>
	<td><?=$persona->dni ?></td>
	<td><?=$persona->nombre ?></td>
	<td><?=$persona->pais_nacimiento->nombre ?></td>
	<td>
		<?php 
        $vuelos = $persona -> aggr ('ownVueloList', 'ciudad' );  
           foreach ( $vuelos as $vuelo ) { 
             echo $vuelo -> nombre." "; 
           }
        ?>
 	</td>
</tr>

<?php endforeach;?>

</table>