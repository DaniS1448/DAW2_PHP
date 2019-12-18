	<nav class="container navbar navbar-expand-sm bg-dark navbar-dark rounded">

		<a class="navbar-brand" href="<?=base_url()?>"> 
			<img src="<?=base_url()?>assets/img/home-alt.png" alt="INICIO" style="width: 40px;">
		</a>

		<ul class="navbar-nav">

    		<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Country</a>
    			<div class="dropdown-menu">
    				<a class="dropdown-item" href="<?=base_url()?>country/create">Create</a>
    				<a class="dropdown-item" href="<?=base_url()?>country/read">Read</a>
    			</div>
    		</li>
    	
    		<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">City</a>
    			<div class="dropdown-menu">
    				<a class="dropdown-item" href="<?=base_url()?>city/create">Create</a>
    				<a class="dropdown-item" href="<?=base_url()?>city/read">Read</a>
    			</div>
    		</li>
	 
    		<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">User</a>
    			<div class="dropdown-menu">
    				<a class="dropdown-item" href="<?=base_url()?>user/create">Create</a>
    				<a class="dropdown-item" href="<?=base_url()?>user/read">Read</a>
    				<a class="dropdown-item" href="<?= base_url()?>user/travel">Travel</a>
    			</div>
    		</li>
   		</ul>
	</nav>
