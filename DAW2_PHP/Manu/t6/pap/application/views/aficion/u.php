<h1>Modificar aficion</h1>
<form action="uPost" method="post">
<input type="hidden" name="id" value="<?=$aficion->id ?>"/>
Nombre<input type="text" name="nombre" value="<?=$aficion->nombre ?>"/>
<input type="submit" value="Insertar"/>
</form>