<h1>Registrar usuario</h1>
<form action="regPost" method="post">
Nombre de usuario: <input type="text" name="nombre" required="required"/>
<br>
Contraseña: <input type="password" name="pwd" required="required"/>
<br>
<input type="submit" value="Registrarse"/>
</form>
<a href="<?= base_url()?>home/index"><button>Volver</button></a>
