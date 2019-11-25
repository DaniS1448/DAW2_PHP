<?php
$peli = ['Titanic','Crepúsculo','Los juegos del hambre'];
$cancion = ['Let it be','Mediterráneo','Close to the edge', 'Bohemian rhapsody'];

if ($_GET['dato'] == 'peli') echo $peli[rand(0, 2)];
else if ($_GET['dato'] == 'cancion') echo  $cancion[rand(0, 3)];
    
    

?>