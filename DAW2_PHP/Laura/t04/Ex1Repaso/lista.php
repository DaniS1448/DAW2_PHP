<h3>Lista de palabras en el diccionario</h3>

<b>ESPAÑOL		INGLÉS		FRANCES</b><br>
<form action ="anadirPalabra.php" method ="post">
<input type ="submit" name="anadirPalabra" value="Añadir Palabra"/>
</form>
<form action = "traduccion.php" method ="post">
<input type ="submit" name="traducir" value="Traducir"/> 
</form> 

<?php
session_start();
//si existe no hagas nada, si no, creamelo
isset($_SESSION['diccionario'])?   :($_SESSION['diccionario']=['es'=>[],'uk'=>[], 'fr'=>[]]);

//Recogo los valores enviados por post
$español =isset($_POST['es'])?$_POST['es']:null;
$ingles =isset($_POST['uk'])?$_POST['uk']:null;
$frances =isset($_POST['fr'])?$_POST['fr']:null;

//$nuevaPalabra = isset($_POST['actualPendiente'])?$_POST['actualPendiente']:null;

//añado las palabras 
array_push($_SESSION['diccionario']['es'],$español);
array_push($_SESSION['diccionario']['uk'],$ingles);
array_push($_SESSION['diccionario']['fr'],$frances);

//print_r( $_SESSION['diccionario']);
//echo array_push($_SESSION['diccionario']['es'],$español);

//Recorro el array para ir metiendo las nuevas palabras 
echo "<table>";

for($i=0;$i<sizeof($_SESSION['diccionario']['es']);$i++){
echo "<tr>";
echo "<td>".$_SESSION['diccionario']['es'][$i]."</td>";
echo "<td>".$_SESSION['diccionario']['uk'][$i]."</td>";
echo "<td>".$_SESSION['diccionario']['fr'][$i]."</td>";
echo "</tr>";
}
echo "</table>";

//header('Location:anadirPalabraPost.php');

?>