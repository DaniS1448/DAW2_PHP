<h1>Aplicacion Loteria</h1>

<form action="<?= base_url()?>persona/log" method="post">
Nombre usuario: <input type="text" name="nombre" required="required"/>
<br>
Contraseña: <input type="password" name="pwd" required="required"/>
<br>
<input type="submit" value="Entrar"/>
</form>
<a href="<?= base_url()?>persona/reg">Registrarse</a>
