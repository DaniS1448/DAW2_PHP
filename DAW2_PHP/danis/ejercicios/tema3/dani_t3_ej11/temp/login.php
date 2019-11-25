<?php 
session_start();

if (isset($_SESSION['activo']) && $_SESSION['activo'] == true) :?>

		<?php header('Location: tablero.php'); ?>	
		
<?php else:?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Siete y media | DAW2</title>
  <meta name="description" content="Siete y media | DAW2">
  <meta name="author" content="DaniS1448">
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="fueraDiv">
        <h3><font color=blue>Login Siete y media</font></h3>
        
        <form id="loginForm" action="loginPost.php" method="post"></form>
        <table>
    		<tr>
    			<td>Usuario:</td>
    			<td><input form="loginForm" type="text" name="user" id="user" required value=""></td>			
    		</tr>
    		<tr>
    			<td>Contraseña:</td>
    			<td><input form="loginForm" type="password" name="password" id="password" required value=""></td>
    		</tr>
    		<tr>
    			<td><button form="loginForm" type="submit">Entrar al juego</button></td>
    		</tr>
    	</table>
    	<br>
    	<a href="registrar.php"><button><b>Registrar usuario</b></button></a>
	</div>
	
	<div>
		<form class="form-3" action="loginPost.php" method="post">
            <p class="clearfix">
                <label for="user">Usuario</label>
                <input type="text" name="user" id="user" placeholder="usuario" required>
            </p>
            <p class="clearfix">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" placeholder="Contraseña" required> 
            </p>
            <p class="clearfix">
                <a href="registrar.php"><input type="button" value="Registrar usuario"></a>
            </p>  
			<p class="clearfix">
                <input type="submit" name="submit" value="Entrar al juego">
            </p>    
        </form>
	</div>
</body>
</html>
<?php endif;?>