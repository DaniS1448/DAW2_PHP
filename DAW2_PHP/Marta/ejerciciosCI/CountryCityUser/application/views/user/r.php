<div class="container">
    <h2>Users list</h2>
    <table  class="table table-striped table-hover">
        <thead>
        	<tr>
        		<th>Name user</th>
        		<th>DNI user</th>
        		<th>City born</th>
        		<th>Cities travelled</th>
        	<tr>
        </thead>
        <tbody>
        	<?php foreach($users as $user):?>
        		<tr>
        			<td><?=$user->name?></td>
        			<td><?=$user->dni?></td>
        			<td><?=$user->born->name?></td>
        			<td>
        				<?php foreach($user->aggr('ownTravelsList','city') as $city):?>
        					<?=$city->name?>,
        				<?php endforeach;?>
        			</td>
        		</tr>
        	<?php endforeach;?>
        </tbody>
    
    </table>
</div>