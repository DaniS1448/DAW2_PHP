<?php
session_start();
header ( 'Content-Type: text/html; charset=UTF-8' );

echo <<< HTML
        <h4>Añadir nueva traducción</h4>
        <form action="addPost.php" method="POST">
        ESPAÑOL<input type="text" id="idES" name="nmES"/><br/>
        INGLÉS<input type="text" id="idEN" name="nmEN"/><br/>
        FRANCÉS<input type="text" id="idFR" name="nmFR"/><br/>
        <input type="submit" value="Actual => Pendientes"/><br/>
        </form>
        <a href="addFPost.php"><button>Pendientes=>diccionario</button></a>
        <a href="addCPost.php"><button>Cancelar</button></a>
HTML;

if (isset($_SESSION['pendiente'])){
    echo "<hr/><h5>Lista de palabras pendientes de añadir al diccionario</h5>";
    echo "<br/><table><tr><th>ESPAÑOL</th><th>INGLÉS</th><th>FRANCÉS</th></tr>";
    
    foreach ($_SESSION['pendiente'] as $palabra){
        echo "<tr><td>{$palabra['es']}</td><td>{$palabra['en']}</td><td>{$palabra['fr']}</td></tr>";
    }
    echo '</table>';
}

?>