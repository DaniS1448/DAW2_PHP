<?php
require_once 'bd.php';

$user = isset($_POST['inUser'])?$_POST['inUser']:null;
$pass = isset($_POST['inPass'])?$_POST['inPass']:null;
$pais = isset($_POST['pais'])?$_POST['pais']:'es';

function loginIncorrecto(){
    global $textoError;
    global $pais;
    echo <<<HTML
        <h1>{$textoError[$pais][0]}</h1>
        <form id="form" method="post" action="index.php">
        <button type="submit" form="form" name="lastLang" value="$pais">{$textoError[$pais][1]}</button>
        </form>
HTML;
}

if (array_key_exists($user, $usuarios)) {
    if ($pass == $usuarios[$user]) {
        //header('Location: jugar.php?pais='+$pais);
        echo <<<HTML
        <form id="form" action="jugar.php" method="post">
        <input type="hidden" name="pais" value="$pais"/>
        <input type="hidden" name="inUser" value="$user"/>
        </form>

        <script type="text/javascript">
        document.getElementById("form").submit();
        </script>
HTML;
        
    } else {
        loginIncorrecto();
    }
} else {
    loginIncorrecto();
}
?>