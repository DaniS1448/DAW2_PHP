<?php 
session_start();

if (isset($_SESSION['activo']) && $_SESSION['activo'] == true) :?>

		<?php header('Location: tablero.php'); ?>	
		
<?php else:?>
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
<?php endif;?>