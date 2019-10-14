<?php
session_start();
if (!isset($_SESSION['estado']) || !($_SESSION['estado'] == true)) {
    header('Location:loginError.php');
} else {
    if (isset($_SESSION['nv'])) {
        $_SESSION['nv']++;
        
    } else {
        $_SESSION['nv']=1;
    }
    
    if (!isset($_SESSION['bandera'])) {
        $_SESSION['bandera']="r1";
    }
}

?>

<header>
	Conectado como <b><?= $_SESSION['nombre'] ?></b> Número de visitas: <?php if (isset($_SESSION['nv'])) {echo $_SESSION['nv'];}?>
	<form action="logout.php">
	<input type="submit" value="Desconectar"/>
	<input type="radio" name="radio" value="r1" <?php if (isset($_SESSION['bandera'])) {if($_SESSION['bandera'] == 'r1') {echo "checked=\"checked\"";}}?>/>BANDERA 1
	<input type="radio" name="radio" value="r2" <?php if (isset($_SESSION['bandera'])) {if($_SESSION['bandera'] == 'r2') {echo "checked=\"checked\"";}}?>/>BANDERA 2
	<input type="radio" name="radio" value="r3" <?php if (isset($_SESSION['bandera'])) {if($_SESSION['bandera'] == 'r3') {echo "checked=\"checked\"";}}?>/>BANDERA 3
	</form>
</header>
<body>
<h1>
Bienvenido a home 
</h1>

</body>