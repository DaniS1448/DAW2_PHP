<script type="text/javascript">
	var users=[];
	var cities=[];
	
    function userSelectedAjax(){
    	var x = new XMLHttpRequest();
    	var palabra = document.getElementById("palabra").value;
    	var idioma = document.getElementById("idioma").value;
    	x.open("POST",
    			"ajax.php",
    			true);
    	x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    	x.setRequestHeader("X-Requested-With","XMLHttpRequest");
    	x.send("palabra="+palabra+"&idioma="+idioma);
    	
    	x.onreadystatechange=function(){
    		if(x.readyState == 4 && x.status==200){
    			document.getElementById('traduccion').value=x.responseText;
    		}
    	}
    }

    function userSelected(){
    	var valueMiOption = document.getElementById('idUser').value;

    	for(cadaId of cities){
    		document.getElementById('idt-'+cadaId).checked=false;
        }

    	for(cadaId of users[valueMiOption]){
			document.getElementById('idt-'+cadaId).checked=true;
        }
    }

</script>

<div class="container">
	<h4>REGISTER TRAVEL</h4>
	<form action="<?= base_url().'user/regTravelPost' ?>" method="post" class="form">
		<label for="idUser">User: </label>
		<select name="idUser" id="idUser" onchange="userSelected();">
			<?php foreach ($users as $user):?>
				<option value="<?= $user->id?>"><?= $user->dni?> - <?= $user->name?></option>
				<script>
					users[<?= $user->id ?>]=[];

					<?php foreach ($user->aggr ('ownTravelledList', 'city') as $cadaCityTravelled):?>
					users[<?= $user->id ?>].push(<?= $cadaCityTravelled->id ?>);
					<?php endforeach;?>
				</script>
			<?php endforeach;?>
		</select>
		<br>
		Travelled:	
		<?php foreach ($cities as $city):?>
    		<input type="checkbox" name="travelled[]" id="idt-<?= $city->id ?>" value="<?= $city->id ?>"/>
    		<label for="idt-<?= $city->id ?>"><?= $city->name ?></label>
    		<script>cities.push(<?= $city->id ?>);</script>
		<?php endforeach;?>
		<br><br>
		<input class="btn btn-warning" type="submit" value="Create">
		<a class="btn btn-warning" href="<?= base_url().'city' ?>">Cancel</a>
	</form>
</div>

<script>userSelected();</script>