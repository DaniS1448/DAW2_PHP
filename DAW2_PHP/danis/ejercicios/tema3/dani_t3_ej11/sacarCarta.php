d<?php 
session_start();

if (isset($_SESSION['activo']) && $_SESSION['activo'] == true && $_SESSION['quedanVidas'] == true){
    
    $posicionNuevaCarta = rand(0,sizeof($_SESSION['baraja'])-1);
    $_SESSION['yo'][] = $_SESSION['baraja'][$posicionNuevaCarta];
    unset($_SESSION['baraja'][$posicionNuevaCarta]);
    $_SESSION['baraja'] = array_values($_SESSION['baraja']);
    header('Location:tablero.php');
} else {
    header('Location:login.php');
}

?>
