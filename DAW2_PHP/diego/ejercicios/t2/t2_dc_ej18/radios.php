<?php
// preparamos el html con el metodo de envio de datos y la pagina a donde iremos despues
echo <<< HTML
    Selecciona una opción<br>
    <form action="resultado.php" method="post"> 
HTML;

$arrayNum = [ //escribimos el array para recorrerlo despues
    "1" => "Uno",
    "2" => "Dos",
    "3" => "Tres",
    "4" => "Cuatro",
    "5" => "Cinco",
    "6" => "Seis",
    "7" => "Siete",
    "8" => "Ocho",
    "9" => "Nueve",
    "10" => "Diez",
    "11" => "Once",
    "12" => "Doce",
    "13" => "Trece",
    "14" => "Catorce",
    "15" => "Quince"
];

foreach ($arrayNum as $k => $v){ // recorremos el array con clave valor
    
    if ($k <= $_POST['numero']) { // si recibimos una clave (k) de 'numero'...
        echo <<<HTML
            <input type="radio" name="numero" value="$k" id="$k"/>
            <label for="$k">$v</label><br/>
HTML;
    } //
}
echo <<<HTML
    <input type="submit" value="Enviar" />
    </form>
HTML;

?>