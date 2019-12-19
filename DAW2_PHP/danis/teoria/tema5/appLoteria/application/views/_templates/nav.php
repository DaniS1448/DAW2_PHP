

<nav class="container navbar navbar-inverse">
  <div class="navbar-header">
    <a class="navbar-brand" href="<?=base_url()?>">APP LOTERÍA</a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
    
    <?php session_start_seguro();?>
    <?php if(!isset($_SESSION['usuario'])):?>
        <li><a href="<?= base_url() ?>home/registrar">REGISTRAR</a></li>
        <li><a href="<?= base_url() ?>home/login">LOGIN</a></li>
    <?php else:?>
    	<li><a href="<?= base_url() ?>boleto/registrar">REGISTRAR BOLETO</a></li>
    	<li><a href="<?= base_url() ?>boleto/boletos">VER BOLETOS</a></li>
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

