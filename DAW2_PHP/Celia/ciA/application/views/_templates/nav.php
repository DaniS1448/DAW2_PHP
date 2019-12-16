	<nav class="container navbar navbar-expand-sm bg-dark navbar-dark rounded">

		<a class="navbar-brand" href="<?=base_url()?>"> 
			<img src="<?=base_url()?>assets/img/home-alt.png" alt="INICIO" style="width: 40px;">
		</a>

		<ul class="navbar-nav">

    		<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Asignatura</a>
    			<div class="dropdown-menu">
    				<a class="dropdown-item" href="<?=base_url()?>asignatura/crear">Crear</a>
    				<a class="dropdown-item" href="<?=base_url()?>asignatura/listar">Listar</a>
    			</div>
    		</li>
    	
    		<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Alumno</a>
    			<div class="dropdown-menu">
    				<a class="dropdown-item" href="<?=base_url()?>alumno/crear">Crear</a>
    				<a class="dropdown-item" href="<?=base_url()?>alumno/listar">Listar</a>
    			</div>
    		</li>
	 
    		<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Nota</a>
    			<div class="dropdown-menu">
    				<a class="dropdown-item" href="<?=base_url()?>nota/crear">Crear</a>
    			</div>
    		</li>
   		</ul>
	</nav>
