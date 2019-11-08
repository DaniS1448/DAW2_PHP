<?php
session_start();


if (!isset($_SESSION['diccionario'])) $_SESSION['diccionario'] = [];

echo "<h4>Lista de palabras en el diccionarios</h4>";
echo "<br/><table><tr><th>ESPAÑOL</th><th>INGLÉS</th><th>FRANCÉS</th></tr>";

if (isset($_SESSION['diccionario'])){

    foreach ($_SESSION['diccionario'] as $palabra){
        echo "<tr><td>{$palabra['es']}</td><td>{$palabra['en']}</td><td>{$palabra['fr']}</td></tr>";
    }
}

echo '</table>';

echo <<< HTML
        <a href="nuevasPalabras.php"><button>Añadir palabras</button></a>
        <a href="traducir.php"><button>Traducir</button></a>
HTML;


?>