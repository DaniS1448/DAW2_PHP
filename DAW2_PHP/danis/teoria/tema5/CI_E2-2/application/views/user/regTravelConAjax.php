<script type="text/javascript">

    function repintarChecboxes(allCities, checkedCities){
    
    	for(cadaId of allCities){
    		document.getElementById('idt-'+cadaId).checked=false;
        }
    
    	for(cadaId of checkedCities){
    		document.getElementById('idt-'+cadaId).checked=true;
        }
    }

    function userSelected(){
    	var x = new XMLHttpRequest();
    	var idUser = document.getElementById('idUser').value;
    	x.open("POST",
    			"<?= base_url()?>user/ajaxTravelled",
    			true);
    	x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    	x.setRequestHeader("X-Requested-With","XMLHttpRequest");
    	x.send("idUser="+idUser);
    	
    	x.onreadystatechange=function(){
    		if(x.readyState == 4 && x.status==200){
    			var elementos = x.responseText.split('&');
				var allCities = elementos[0].split('-');
				var checkedCities = elementos[1].split('-');
    			repintarChecboxes(allCities, checkedCities);
    		}
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
			<?php endforeach;?>
		</select>
		<br>
		Travelled:	
		<?php foreach ($cities as $city):?>
    		<input type="checkbox" name="travelled[]" id="idt-<?= $city->id ?>" value="<?= $city->id ?>"/>
    		<label for="idt-<?= $city->id ?>"><?= $city->name ?></label>
		<?php endforeach;?>
		<br><br>
		<input class="btn btn-warning" type="submit" value="Create">
		<a class="btn btn-warning" href="<?= base_url().'city' ?>">Cancel</a>
	</form>
</div>

<script>userSelected();</script>