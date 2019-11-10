<?php
function conectarMySQL(
    $schema ='daw2_7media',
    $usu = 'daw2_us',
    $pwd = 'EvNmcATQd5',
    $host = 'daniserver.com'
    ) {
        try {
            $dsn = "mysql:host=$host;dbname=$schema";
            $db = new PDO($dsn, $usu, $pwd);
        } catch (PDOException $e){
            print ("ERROR de conexión a $schema");
            die();
        }
        return $db;
}

function crearTopBoard(){
    $db = conectarMySQL();
    $consulta = "SELECT name, points FROM users WHERE NOT user = 'test' ORDER BY points DESC, lastconexion DESC LIMIT 5"; //SELECT name, points, vidas FROM users ORDER BY points DESC LIMIT 5
    $sentencia = $db->prepare($consulta);
    $sentencia -> execute();
    $resultado = $sentencia->fetchAll();
    
    $html = '';
    $contador = 1;
    foreach ($resultado as $res){
        
        $jugadorTemp = $res['name'];
        $partidasGanadasTemp = $res['points'];
        
        $html.=" <b>" . $contador . ". $jugadorTemp</b> ($partidasGanadasTemp) &emsp; ";
        $contador++;
    }
    return $html;
}

?>