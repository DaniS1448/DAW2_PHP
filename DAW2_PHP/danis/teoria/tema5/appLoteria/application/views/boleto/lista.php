<div class="container">
	  <table class="table table-hover">
    <thead>
      <tr>
        <th>Número boleto</th>
        <th>Precio</th>
        <th>Persona</th>
        <th>Participación</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach ($boletos as $boleto):?>
      	<?php foreach($boleto->ownParticipacionList as $fila):?>
              <tr>
                <td><?= $boleto->numero?></td>
                <td><?= $boleto->precio?></td>
                <td><?= $fila->usuario->nombre ?></td>
                <td><?= $fila->dinero ?></td>
                <?php if($usuario->nombre == $fila->usuario->nombre):?>
                	<td><a href="<?= base_url() ?>boleto/compartir?idBoleto=<?= $boleto->id ?>&idFila=<?= $fila->id ?>" class="btn btn-warning btn-sm">Compartir</a></td>
              	<?php else:?>
              		<td></td>
              	<?php endif;?>
              </tr>
        <?php endforeach;?>
      <?php endforeach;?>
    </tbody>
  </table>
</div>