<h1>Añadir boleto</h1>
<form action="addPost" method="post">

Numero boleto: <input type="text" name="numeroBoleto" minlength="5" maxlength="5" required="required"/>
<br>
<input type="submit" value="Añadir"/>

</form>
<a href="<?= base_url()?>home/index"><button>Volver</button></a>