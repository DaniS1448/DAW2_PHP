

<nav class="container navbar navbar-inverse">
  <div class="navbar-header">
    <a class="navbar-brand" href="<?=base_url()?>">CCU 3</a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
    
    <?php session_start_seguro();?>
    <?php if(!isset($_SESSION['usuario'])):?>
        <li class="dropdown"><a class="dropdown-toggle"
						data-toggle="dropdown" href="#">COUNTRY<span class="caret"></span>
					</a>

						<ul class="dropdown-menu">
							<li><a href="<?=base_url()?>country/c">CREATE</a></li>
							<li><a href="<?=base_url()?>country/r">LIST</a></li>
						</ul></li>
						
		<li class="dropdown"><a class="dropdown-toggle"
						data-toggle="dropdown" href="#">CITIES<span class="caret"></span>
					</a>

						<ul class="dropdown-menu">
							<li><a href="<?=base_url()?>city/c">CREATE</a></li>
							<li><a href="<?=base_url()?>city/r">LIST</a></li>
						</ul></li>
						
		<li class="dropdown"><a class="dropdown-toggle"
						data-toggle="dropdown" href="#">USERS<span class="caret"></span>
					</a>

						<ul class="dropdown-menu">
							<li><a href="<?=base_url()?>user/c">CREATE</a></li>
							<li><a href="<?=base_url()?>user/r">LIST</a></li>
							<li><a href="<?=base_url()?>user/registerTravell">TRAVELL</a></li>
						</ul></li>
						
						<li><a href="<?= base_url().'home/mensaje';?>" target="_blank">ERROR</a></li>
    <?php else:?>
    	<li class="dropdown"><a class="dropdown-toggle"
						data-toggle="dropdown" href="#">BTN LOGEADO<span class="caret"></span>
					</a>

						<ul class="dropdown-menu">
							<li><a href="<?=base_url()?>city/c">CREATE</a></li>
							<li><a href="<?=base_url()?>city/r">LIST</a></li>
						</ul></li>
    <?php endif;?>
    
    </ul>
    <?php if(isset($_SESSION['usuario'])):?>
    <ul class="nav navbar-nav navbar-right">
      <li><a>Bienvenid@ <?= $_SESSION['usuario'] ?></a></li>
      <li><a href="<?= base_url() ?>home/logout">Salir</a></li>
    </ul>
    <?php endif;?>
  </div>
</nav>

<br>

