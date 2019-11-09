<?php
require_once 'Carta.php';
require_once 'bd.php';

define ('VIDASDIARIAS',5);

function inicializarMazo() {
    $mazo = [];
    $palos = ['oros','copas','espadas','bastos'];
    $figuras = ['as','dos','tres','cuatro','cinco','seis','siete','sota','caballo','rey'];
    
    foreach ($palos as $palo) {
        foreach ($figuras as $v => $figura) {
            $nombre = $figura.' de '.$palo;
            $valor = ($v<7?$v+1:0.5);
            $img = 'img/'.substr($palo,0,1).($v+1).'.png';
            $carta = new Carta($nombre,$valor,$img);
            $mazo[] = $carta;
        }
    }
    
    return $mazo;
}


function recoger($user, $elemento){
    $db = conectarMySQL();
    $consulta = "select $elemento from users where user = :user";
    $sentencia = $db->prepare($consulta);
    $sentencia->bindParam ( ':user', $user);
    $sentencia -> execute();
    $resultado = $sentencia->fetchAll();
    
    $datoRecogido = 0;
    
    foreach ($resultado as $res){
        if (isset($res[$elemento]) && $res[$elemento] != [] ) {
            $datoRecogido = $res[$elemento];
        }
    }
    return $datoRecogido;
}


function aumentarPuntos($user){
    
    $db = conectarMySQL();
    $consulta = "UPDATE users SET points = :points where user = :user";
    $resultado = $db->prepare($consulta);
    $resultado->execute([':user'=>$user,':points'=>recoger($user, 'points')+1]);
        
}



function disminuirVidas($user){
    $db = conectarMySQL();
    $consulta = "UPDATE users SET vidas = :vidas where user = :user";
    $resultado = $db->prepare($consulta);
    $resultado->execute([':user'=>$user,':vidas'=>recoger($user, 'vidas')-1]);
}

function resetVidas($user){
    $db = conectarMySQL();
    $consulta = "UPDATE users SET vidas = :vidas where user = :user";
    $resultado = $db->prepare($consulta);
    $resultado->execute([':user'=>$user,':vidas'=>VIDASDIARIAS]);
}

function actualizarLastConexion($user){
    $db = conectarMySQL();
    $consulta = "UPDATE users SET lastconexion = :lastconexion where user = :user";
    $resultado = $db->prepare($consulta);
    $resultado->execute([':user'=>$user,':lastconexion'=>date("Y-m-d")]);
}


function crearTopBoard(){
    $db = conectarMySQL();
    $consulta = "SELECT name, points, vidas FROM users WHERE NOT user = 'test' ORDER BY points DESC, lastconexion DESC"; //SELECT name, points, vidas FROM users ORDER BY points DESC LIMIT 5
    $sentencia = $db->prepare($consulta);
    $sentencia -> execute();
    $resultado = $sentencia->fetchAll();
    
    $html = '<table><tr><th>Jugador</th><th>Puntos</th><th>Vidas</th></tr>';
    
    foreach ($resultado as $res){
        
        $html .= "<tr><td>{$res['name']}</td><td>{$res['points']}</td><td>{$res['vidas']}</td></tr>";
    }
    $html.='</table>';
    return $html;
}

?>