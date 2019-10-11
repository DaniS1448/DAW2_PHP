<?php
echo <<<HTML
    <form action="ej17.php" method="get">
    Escoge un fichero <input type="file" name="file"/>
    <br>
    Escoge una carpeta destino
    <select name="carpeta"> 
        <option value="txt">TEXTO</option>
        <option value="img">IMAGEN</option>
    </select>
    <br>
    <input type="submit" value="Subir"/>


    </form>
HTML;
?>