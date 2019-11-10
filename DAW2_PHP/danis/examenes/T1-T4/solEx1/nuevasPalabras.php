<?php
session_start();
header ( 'Content-Type: text/html; charset=UTF-8' );

echo <<< HTML
        <h4>Añadir nueva traducción</h4>
        <form action="nuevasPalabrasPost.php" method="POST">
        ESPAÑOL<input type="text" name="palabraES"/><br/>
        INGLÉS<input type="text" name="palabraEN"/><br/>
        FRANCÉS<input type="text" name="palabraFR"/><br/>
        <input type="submit" value="Actual => Pendientes"/><br/>
        </form>
        <a href="anadirPalabras.php"><button>Pendientes=>diccionario</button></a>
        <a href="borrarTemporal.php"><button>Cancelar</button></a>
HTML;

if (isset($_SESSION['temporal'])){
    echo <<<HTML
        <hr/>
        <h5>Lista de palabras pendientes de añadir al diccionario</h5>
        <br/>
        <table>
            <tr>
                <th>ESPAÑOL</th>
                <th>INGLÉS</th>
                <th>FRANCÉS</th>
            </tr>
HTML;
    
    foreach ($_SESSION['temporal'] as $palabra){
        echo "<tr><td>{$palabra['es']}</td><td>{$palabra['en']}</td><td>{$palabra['fr']}</td></tr>";
    }
    echo '</table>';
}

?>