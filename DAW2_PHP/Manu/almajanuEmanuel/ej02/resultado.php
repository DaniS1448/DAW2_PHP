<?php
$priNum=isset($_COOKIE['priNum'])?$_COOKIE['priNum']:"";   //Consigo el primer numero cogiendo el valor que contenga la cookie
$segNum=isset($_POST['segNum'])?$_POST['segNum']:"";       //Consigo el segundo numero con el post

echo "Primer número: ".$priNum;
echo "<br>";
echo "Segundo número: ".$segNum;
echo "<br>";

//Usando un if determino si el primero numero es mayor, menor o igual que el segundo y muestro el mensaje correspondiente
if ($priNum > $segNum){
    echo "El primer número es MAYOR que el segundo";
}else if ($priNum < $segNum){
    echo "El primer número es MENOR que el segundo";
}else{
    echo "El primer número es IGUAL que el segundo";
}

//Creo un enlace hasta la pagina principal para que puedan ingresar otros numeros
echo "<hr>";
echo "<a href=\"index.php\">Volver a introducir números</a>";
?>
