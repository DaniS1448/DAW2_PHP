
<div class="container">
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#myNavbar">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?=base_url()?>">C.C.U</a>
			</div>

			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">

					<li class="dropdown"><a class="dropdown-toggle"
						data-toggle="dropdown" href="#"> COUNTRY<span class="caret"></span>
					</a>

						<ul class="dropdown-menu">
							<li><a href="<?=base_url()?>country/c">CREATE</a></li>
							<li><a href="<?=base_url()?>country/r">LIST</a></li>
						</ul></li>

					<li class="dropdown"><a class="dropdown-toggle"
						data-toggle="dropdown" href="#"> CITY<span class="caret"></span>
					</a>

						<ul class="dropdown-menu">
							<li><a href="<?=base_url()?>city/c">CREATE</a></li>
							<li><a href="<?=base_url()?>city/r">LIST</a></li>
						</ul></li>

					<li class="dropdown"><a class="dropdown-toggle"
						data-toggle="dropdown" href="#"> USER<span class="caret"></span>
					</a>

						<ul class="dropdown-menu">
							<li><a href="<?=base_url()?>user/c">CREATE</a></li>
							<li><a href="<?=base_url()?>user/r">LIST</a></li>
							<li><a href="<?=base_url()?>user/registrarViaje">REGISTER TRAVEL</a></li>
						</ul></li>

					<li><a href="https://daw2.ga/" target="_blank">DAW2</a></li>

				</ul>

			</div>
		</div>
	</nav>
</div>
<br>

