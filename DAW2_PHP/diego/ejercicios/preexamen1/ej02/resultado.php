<?php 

$n1=$_COOKIE['n1'];
$n2=$_POST['n2'];

echo "Primer número: ".$n1."<br/>";
echo "Segundo número: ".$n2."<br/>";

if ($n1>$n2) {
    echo "El primer número es MAYOR que el segundo";
    
} else if ($n1<$n2){
    echo "El primer número es MENOR que el segundo";
    
} else {
    echo "El primer número es IGUAL que el segundo";
}

echo "<hr>";

echo "<a href=\"index.php\">Volver a introducir número</a>";



?>

