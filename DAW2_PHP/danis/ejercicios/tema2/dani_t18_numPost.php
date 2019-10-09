<?php 
//require_once 'utilHTML.php';

if ($_GET['num'] >= 1 && $_GET['num'] <= 15) {
    $num = $_GET['num'];
    
    $numeros= [
        'Uno',
        'Dos',
        'Tres',
        'Cuatro',
        'Cinco',
        'Seis',
        'Siete',
        'Ocho',
        'Nueve',
        'Diez',
        'Once',
        'Doce',
        'Trece',
        'Catorce',
        'Quince'
    ];
    
    echo "Seleciona una opción<br/>";
    echo "<form action=\"dani_t18_radioPost.php\">";
    for ($i = 0; $i < $num; $i++) {
        echo "<input type=\"radio\" name=\"num\" value=\"".($i+1)."\"/> $numeros[$i]</br> ";
    }
    echo "<input type=\"submit\"/></form>";
} else {
    echo "El número debe estar entre 1 y 15";
}
?>