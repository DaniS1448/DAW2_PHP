<div class="container">
<legend>BOLETO</legend>
	<label for="numero">Número:</label>
    <input type="text" class="form-control-" id="numero" name="numero" minlength="5" maxlength="5"
    value="<?= $boleto->numero?>" size="2" disabled >
    <label for="precio">Precio:</label>
    <input type="text" class="form-control-" id="precio" name="precio" value="<?= $boleto->precio?>" size="1" disabled>
    
    <br/><br/>
<legend>Otras participaciones</legend>
<?php foreach($boleto->ownParticipacionList as $fila):?>
 <?php if($fila->usuario_id != $usuario->id):?>
	<label for="numero-f<?= $fila->id ?>">Número:</label>
    <input type="text" class="form-control-" id="numero-f<?= $fila->id ?>"
    value="<?= $fila->usuario->nombre?>" size="2" disabled >
    
    <label for="dinero-f<?= $fila->id ?>">Dinero:</label>
    <input type="text" class="dineros" id="dinero-f<?= $fila->id ?>"
    value="<?= $fila->dinero?>" size="2" disabled >
    <br>
 <?php endif;?>
<?php endforeach;?>
<br><br>
<form action="<?= base_url() ?>boleto/compartirPost" method="POST">

<?php foreach($boleto->ownParticipacionList as $fila):?>
 <?php if($fila->usuario_id == $usuario->id):?>
<legend>Tu participación</legend>
  <div class="form-group row">
    <label for="persona" class="col-sm-2 col-form-label">Persona</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="persona" value="<?= $fila->usuario->nombre ?>" readonly>
      <!-- <input type="hidden" name="idPersonaComparte" value="<?= $fila->usuario->id ?>"/> -->
    </div>
  </div>
  <div class="form-group row">
    <label for="dinero" class="col-sm-2 col-form-label">Dinero</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="dinero" name="dineroComparte" value="<?= $fila->dinero ?>" <?= ($fila->usuario->nombre == $usuario)?'disabled':'' ?>>
    </div>
  </div>
 <?php endif;?>
<?php endforeach;?>
<legend>Nueva participación</legend>
 <div class="form-group row">
    <label for="select-persona-compartida">Persona para compartir</label>
    <select class="form-control" id="select-persona-compartida" name="idUsuarioCompartido">
		<?php foreach($usuarios as $cadaUsuario):?>
			<?php if($usuario->nombre != $cadaUsuario->nombre): ?>
			<option value="<?= $cadaUsuario->id ?>"><?= $cadaUsuario->nombre ?></option>
			<?php endif;?>
		<?php endforeach;?>
    </select>
  </div>
  
   <div class="form-group row">
    <label for="dineroCompartido" class="col-sm-2 col-form-label">Dinero</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="dineroCompartido" name="dineroCompartido">
    </div>
  </div>
  
  <input type="hidden" name="idBoleto" value="<?= $boleto->id ?>">
  <input type="hidden" name="idFila" value="<?= $idFila ?>">

  <button class="btn btn-default" type="button" onclick="validarDinero()">Validar dinero</button>
  <button type="submit" class="btn btn-warning" id="btnCompartir" disabled>Compartir boleto</button>
</form>
</div>
<script type="text/javascript">
    function validarDinero(){
    	var precio = Number(document.getElementById('precio').value);
    	var dineroComparte = Number(document.getElementById('dinero').value);
    	var dineroCompartido= Number(document.getElementById('dineroCompartido').value);
    	var dineros = document. getElementsByClassName('dineros');
		var contador = 0;
    	for(din of dineros){
    		contador+=Number(din.value);
        }
    	var sumaDinero = dineroComparte+dineroCompartido+contador;
    	if(precio == sumaDinero){
    		document.getElementById('btnCompartir').disabled=false;
    		//console.log('contador: ' + sumaDinero);
    	}else{
    		document.getElementById('btnCompartir').disabled=true;
    		alert('La suma del dinero es: ' + sumaDinero + ' pero debe ser: ' + precio);
    	}
    }
</script>