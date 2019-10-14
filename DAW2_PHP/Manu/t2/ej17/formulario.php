<?php
echo <<<HTML
    <form enctype="multipart/form-data" action="ej17.php" method="post">
    Escoge un fichero <input type="file" name="fich"/>
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