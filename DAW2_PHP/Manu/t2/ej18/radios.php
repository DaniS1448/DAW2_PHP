<?php
echo <<< HTML
    Selecciona una opcion<br>
    <form action="resultado.php" method="get">
HTML;

$arrayNum=["1"=>"Uno","2"=>"Dos","3"=>"Tres","4"=>"Cuatro","5"=>"Cinco","6"=>"Seis","7"=>"Siete","8"=>"Ocho","9"=>"Nueve","10"=>"Diez","11"=>"Once","12"=>"Doce","13"=>"Trece","14"=>"Catorce","15"=>"Quince"];
 
//Me recorre el array y solo me crea radios si la clave es menor que el numero pasado.
    foreach ($arrayNum as $e => $a){
        
        if($e <= $_GET["numero"]){
        echo <<<HTML
            <input type="radio" name="numero" value="$e" id="$e"/>
            <label for="$e">$a</label><br/> 
HTML;
        }
    }

echo <<<HTML
    <input type="submit" value="Enviar" />
    </form>
HTML;
?>