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

function aumentarPerfect($user){
    
    $db = conectarMySQL();
    $consulta = "UPDATE users SET perfect = :perfect where user = :user";
    $resultado = $db->prepare($consulta);
    $resultado->execute([':user'=>$user,':perfect'=>recoger($user, 'perfect')+1]);
    
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


function crearTopBoard($limite){
    $db = conectarMySQL();
    
    if ($limite == 0) {
        $limite='';
    }else {
        $limite = "LIMIT $limite";
    }
    $consulta = "SELECT name, points, vidas, lost, perfect FROM users WHERE NOT lower(user) LIKE 'test%' ORDER BY points DESC, lastconexion DESC $limite"; //SELECT name, points, vidas FROM users ORDER BY points DESC LIMIT 5
    $sentencia = $db->prepare($consulta);
    $sentencia -> execute();
    $resultado = $sentencia->fetchAll();
    
    //<th>Vidas</th>
    $html = '<table class="rwd-table"><tr>
        <th>#</th>
        <th>Jugador</th>
        
        <th>V</th>
        <th>P</th>
        <th>J</th>
        <th>V/P</th>
        <th>7.5</th>
        </tr>';
    
    $contadorTopJugadores=1;
    foreach ($resultado as $res){
        
        $partidasGanadasTemp = $res['points'];
        $partidasPerdidasTemp = $res['lost'];
        $partidasTotales = $partidasGanadasTemp+$partidasPerdidasTemp;
        
        if ($partidasTotales != 0) {
            $porcentajeTemp = round($partidasGanadasTemp * 100 / $partidasTotales);
        } else {
            $porcentajeTemp=100;
        }
       
        //<td>{$res['vidas']}</td>
        $html .= "<tr>
        <td>$contadorTopJugadores</td>
        <td>{$res['name']}</td>
        
        <td>$partidasGanadasTemp</td>
        <td>$partidasPerdidasTemp</td>
        <td>$partidasTotales</td>
        <td>$porcentajeTemp%</td>
        <td>{$res['perfect']}</td></tr>";
        
        
        $contadorTopJugadores++;
    }
    $html.='</table>';
    return $html;
}

function recogerUsuarios(){
    $db = conectarMySQL();
    $consulta = "select user, lastconexion from users";
    $sentencia = $db->prepare($consulta);
    $sentencia -> execute();
    $resultado = $sentencia->fetchAll();
    
    $datosRecogidos = [];
    
    foreach ($resultado as $res){
        $datosRecogidos += [$res['user']=>$res['lastconexion']];
    }
    return $datosRecogidos;
}

?>