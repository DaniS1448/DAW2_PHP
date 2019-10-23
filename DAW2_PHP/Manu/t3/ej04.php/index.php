<h1>Tratamiento de cookies</h1>
<?php 
if (isset($_REQUEST["usuario"])){
    echo "Adios <b>".$_REQUEST["usuario"]."</b>. Usted no esta conectado";
} else {
    echo "Primera ejecucion. Usted no esta conectado";
}

if (isset($_GET['radio'])) {
    $_SESSION['bandera'] = $_GET['paises'];
}
?>
<form action="loginPost.php" method="post">
   Usuario: <input type="text" name="usuario" required="required"/><br>
   Clave: <input type="password" name="clave" required="required"/><br>
   <input type=submit value="Autenticar"/>
</form>


