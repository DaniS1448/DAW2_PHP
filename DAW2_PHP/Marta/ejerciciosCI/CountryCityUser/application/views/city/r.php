<div class="container">
    <h2>Cities list</h2>
    <table  class="table table-striped table-hover">
        <thead>
        	<tr>
        		<th>Name city</th>
        		<th>Name country</th>
        	<tr>
        </thead>
        <tbody>
        	<?php foreach($cities as $city):?>
        		<tr>
        			<td><?=$city->name?></td>
        			<td><?=$city->country->name?></td>
        		</tr>
        	<?php endforeach;?>
        </tbody>
    
    </table>
</div>