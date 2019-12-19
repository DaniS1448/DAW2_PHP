<div class="container">
	<form action="<?= base_url() ?>boleto/registrarPost" method="POST">
  <div class="form-group">
    <label for="numero">Número:</label>
    <input type="text" class="form-control" id="numero" name="numero" minlength="5" maxlength="5">
  </div>
  <div class="form-group">
    <label for="precio">Precio:</label>
    <input type="text" class="form-control" id="precio" name="precio">
  </div>
  
  <button type="submit" class="btn btn-default">Registrar boleto</button>
</form>
</div>