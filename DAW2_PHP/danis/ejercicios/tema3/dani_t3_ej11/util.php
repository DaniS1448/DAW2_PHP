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

function aumentarLost($user){
    
    $db = conectarMySQL();
    $consulta = "UPDATE users SET lost = :lost where user = :user";
    $resultado = $db->prepare($consulta);
    $resultado->execute([':user'=>$user,':lost'=>recoger($user, 'lost')+1]);
    
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
    $consulta = "SELECT name, points, vidas, lost FROM users WHERE NOT user = 'test' ORDER BY points DESC, lastconexion DESC"; //SELECT name, points, vidas FROM users ORDER BY points DESC LIMIT 5
    $sentencia = $db->prepare($consulta);
    $sentencia -> execute();
    $resultado = $sentencia->fetchAll();
    
    $html = '<table border=2><tr>
        <th>Victorias</th>
        <th>Jugador</th>
        <th>Vidas</th>
        <th>Pérdidas</th>
        <th>Partidas</th>
        <th>V/P</th>
        </tr>';
    
    foreach ($resultado as $res){
        
        $partidasGanadasTemp = $res['points'];
        $partidasPerdidasTemp = $res['lost'];
        $partidasTotales = $partidasGanadasTemp+$partidasPerdidasTemp;
        
        if ($partidasTotales != 0) {
            $porcentajeTemp = round($partidasGanadasTemp * 100 / $partidasTotales);
        }
       
        
        $html .= "<tr>
        <td>$partidasGanadasTemp</td>
        <td>{$res['name']}</td>
        <td>{$res['vidas']}</td>
        <td>$partidasPerdidasTemp</td>
        <td>$partidasTotales</td>
        <td>$porcentajeTemp%</td></tr>";
    }
    $html.='</table>';
    return $html;
}

?>