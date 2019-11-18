

<?php


session_start();
//si existe no hagas nada, si no, creamelo
isset($_SESSION['pendientes'])?   :($_SESSION['pendientes']=['es'=>[],'uk'=>[], 'fr'=>[]]);

//Recogo los valores enviados por post
$español =isset($_POST['es'])?$_POST['es']:null;
$ingles =isset($_POST['uk'])?$_POST['uk']:null;
$frances =isset($_POST['fr'])?$_POST['fr']:null;

//Si ningun hueco es vacio, se hace 
if ($_POST['es'] !="" && $_POST['uk'] !="" && $_POST['fr'] !=""){
    
 echo <<<HTML
 <h3>Lista de palabras pendientes de añadir al diccionario</h3>
    <b>ESPAÑOL		INGLÉS		FRANCES</b><br>
HTML;
 
//$nuevaPalabra = isset($_POST['actualPendiente'])?$_POST['actualPendiente']:null;

//añado las palabras 
array_push($_SESSION['pendientes']['es'],$español);
array_push($_SESSION['pendientes']['uk'],$ingles);
array_push($_SESSION['pendientes']['fr'],$frances);

//echo array_push($_SESSION['pendientes']['es'],$español);

//Recorro el array para ir metiendo las nuevas palabras 
echo "<table>";
for($i=0;$i<sizeof($_SESSION['pendientes']['es']);$i++){
echo "<tr>";
echo "<td>".$_SESSION['pendientes']['es'][$i]."</td>";
echo "<td>".$_SESSION['pendientes']['uk'][$i]."</td>";
echo "<td>".$_SESSION['pendientes']['fr'][$i]."</td>";
echo "</tr>";
}
echo "</table>";

}

//si no 
else {
    echo "<b>Ninguna de las palabras puede quedar en blanco<b>";
}
//header('Location:anadirPalabraPost.php');
?>




