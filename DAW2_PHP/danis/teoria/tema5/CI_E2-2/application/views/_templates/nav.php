

<nav class="container navbar navbar-inverse">
  <div class="navbar-header">
    <a class="navbar-brand" href="<?=base_url()?>">C.C.U</a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
    
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
           COUNTRY<span class="caret"></span>
        </a>
        
		<ul class="dropdown-menu">
		  <li><a href="<?=base_url()?>country/c">CREATE</a></li>
		  <li><a href="<?=base_url()?>country/r">LIST</a></li>
	     </ul>
      </li>
      
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
           CITY<span class="caret"></span>
        </a>
        
		<ul class="dropdown-menu">
		  <li><a href="<?=base_url()?>city/c">CREATE</a></li>
		  <li><a href="<?=base_url()?>city/r">LIST</a></li>
	     </ul>
      </li>
      
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
           USER<span class="caret"></span>
        </a>
        
		<ul class="dropdown-menu">
		  <li><a href="<?=base_url()?>user/c">CREATE</a></li>
		  <li><a href="<?=base_url()?>user/r">LIST</a></li>
		  <li><a href="<?=base_url()?>user/regTravel">REGISTER TRAVEL</a></li>
	     </ul>
      </li>
    
    <li><a href="<?= base_url() ?>#">BTN</a></li>
    
    </ul>

  </div>
</nav>

<br>

