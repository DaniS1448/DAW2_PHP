<h1>Modificar pais</h1>
<form action="uPost" method="post">
<input type="hidden" name="id" value="<?=$pais->id ?>"/>
Nombre<input type="text" name="nombre" value="<?=$pais->nombre ?>"/>
<input type="submit" value="Insertar"/>
</form>