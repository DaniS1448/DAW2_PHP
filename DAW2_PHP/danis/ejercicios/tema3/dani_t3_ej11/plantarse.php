<?php
    require_once 'Carta.php';
    session_start();

    if (isset($_SESSION['activo']) && $_SESSION['activo'] == true && $_SESSION['quedanVidas'] == true){
        $totalJugador=0;
        
        foreach ($_SESSION['yo'] as $carta){
            $totalJugador += $carta->valor;
        }
        
        $totalBanca=0;
        
        do{
            
            $posicionNuevaCarta = rand(0,sizeof($_SESSION['baraja'])-1);
            $_SESSION['banca'][] = $_SESSION['baraja'][$posicionNuevaCarta];
            unset($_SESSION['baraja'][$posicionNuevaCarta]);
            $_SESSION['baraja'] = array_values($_SESSION['baraja']);
            
            $totalBancaTemp=0;
            
            foreach ($_SESSION['banca'] as $carta){
                $totalBancaTemp += $carta->valor;
            }
            
            $totalBanca=$totalBancaTemp;
            
            //         echo<<<HTML
            //         totalJugador: $totalJugador<br>
            //         totalBanca: $totalBanca<br>
            // HTML;
            
        }while($totalBanca<$totalJugador);
        
        header('Location:tablero.php');
    } else {
        header('Location:login.php');
    }

?>