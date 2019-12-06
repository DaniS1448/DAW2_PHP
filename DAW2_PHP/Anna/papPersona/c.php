
<!-- <img src="<?=base_url()?>assets/img/flor.jpg" /> -->

<h1>Nueva persona</h1>	

<form action="<?=base_url()?>persona/cPost" method="post" enctype="multipart/form-data">
	
	Nombre
	<input type="text" name="nombre"/>
	<br/>
	Nace
	<select name="idPaisNace">
		<?php foreach ($paises as $pais):?>
		<option value="<?= $pais->id?>">
			<?=$pais->nombre?>
		</option>
		<?php endforeach;?>
	</select>
	Recide
	<select name="idPaisRecide">
		<?php foreach ($paises as $pais):?>
		<option value="<?= $pais->id?>">
			<?=$pais->nombre?>
		</option>
		<?php endforeach;?>
		</select>
		</br>
		<hr>
		Gusta:
	
		<?php foreach ($aficiones as $aficion):?>
<input type="checkbox" name="idAficcionGusta[]" value="<?= $aficion->id?>" id="idg-<?= $aficion->id?>">
<label for="idg-<?= $aficion->id?>"><?=$aficion->nombre?></label>
		<?php endforeach;?>
	</br>
	Odia:
		<?php foreach ($aficiones as $aficion):?>
<input type="checkbox" name="idAficcionOdia[]" value="<?= $aficion->id?>" id="ido-<?= $aficion->id?>">
<label for="ido-<?= $aficion->id?>"><?=$aficion->nombre?></label>
		<?php endforeach;?>
		
	<hr>
	<h1>Añadir foto</h1>

		<b>Elige arhivo:</b> <br /> 
		<input type="fILE" name="f"/></br>
		</br>
	<input type="submit"/>
</form>
	
<a href="<?=base_url()?>home/index"><button>Volver</button></a>